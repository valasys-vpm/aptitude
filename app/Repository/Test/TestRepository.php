<?php

namespace App\Repository\Test;

use App\Models\Designation;
use App\Models\Question;
use App\Models\QuestionOptions;
use App\Models\Registration;
use App\Models\RegistrationQuestion;
use Illuminate\Support\Facades\DB;

class TestRepository implements TestInterface
{

    private $question;
    private $designation;
    private $registrationQuestion;
    private $registration;
    private $questionOptions;

    public function __construct(
        Question $question,
        Designation $designation,
        Registration $registration,
        RegistrationQuestion $registrationQuestion,
        QuestionOptions $questionOptions
    )
    {
        $this->question = $question;
        $this->designation = $designation;
        $this->registrationQuestion = $registrationQuestion;
        $this->registration = $registration;
        $this->questionOptions = $questionOptions;
    }

    public function get_questions($designation_id)
    {
        $registration_id = session()->get('registered_user')->id;

        //Get Designation with details
        $designation = $this->designation->findOrFail($designation_id);

        //Get Questions
        $resultQuestions = $this->question->with('options')->whereDesignationId($designation->id)->whereStatus(1)->inRandomOrder()->limit($designation->number_of_question)->get();

        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {

            DB::beginTransaction();
            //Save data in pivot
            foreach ($resultQuestions as $question) {

                $registrationQuestions = new RegistrationQuestion();
                $registrationQuestions->registration_id = $registration_id;
                $registrationQuestions->question_id = $question->id;
                $registrationQuestions->mark = 0;
                $registrationQuestions->save();
                if($registrationQuestions->id) {
                } else {
                    throw new \Exception('Error while processing request', 1);
                }
            }
            $registration = $this->registration->findOrFail($registration_id);
            $registration->test_start_time = date('Y-m-d H:i:s');
            $registration->update();

            DB::commit();
            session(['registered_user' => $registration]);
            session(['resultQuestions' => $resultQuestions]);
            session(['resultDesignation' => $designation]);
            $response = array('status' => TRUE);

        } catch (\Exception $exception) {
            DB::rollBack();
            $response = array('status' => FALSE, 'message' => 'Error while processing request');
        }
        return $response;

    }

    public function test_submit($attributes)
    {

        try {


            $registration_id = session()->get('registered_user')->id;

            //Update option id in registration_options
            $assignedQuestions = session()->get('resultQuestions');

            DB::beginTransaction();
            if(!empty($attributes['answer'])) {
                foreach ($attributes['answer'] as $question_id => $option_id) {
                    $registrationQuestion = $this->registrationQuestion->whereRegistrationId($registration_id)->whereQuestionId($question_id)->first();
                    $registrationQuestion->option_id = $option_id;

                    //get answer
                    $answerOption = $this->questionOptions->whereQuestionId($question_id)->whereIsAnswer(1)->first();
                    if($answerOption->id == $option_id) {
                        $registrationQuestion->mark = 1;
                    } else {
                        $registrationQuestion->mark = 0;
                    }
                    $registrationQuestion->update();
                }
            }

            DB::commit();
            $response = array('status' => TRUE);

        } catch (\Exception $exception) {
            DB::rollBack();
            $response = array('status' => FALSE, 'message' => 'Error while processing request');
        }
        return $response;


    }

}
