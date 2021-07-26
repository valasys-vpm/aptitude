<?php

namespace App\Repository\Question;

use App\Models\Question;
use App\Models\QuestionOptions;
use Illuminate\Support\Facades\DB;

class QuestionRepository implements QuestionInterface
{

    private $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function get($filters)
    {
        $query = $this->question->whereNotNull('id');
        if(isset($filters['order_by']) && $filters['order_by']) {
            $query->orderBy($filters['order_by']);
        }

        if(isset($filters['status'])) {
            $query->whereStatus($filters['status']);
        }

        if(isset($filters['with']) && in_array('designation', $filters['with'])) {
            $query->with('designation');
        }

        if(isset($filters['with']) && in_array('options', $filters['with'])) {
            $query->with('options');
        }

        return $query->get();

    }

    public function find($id)
    {
        return $this->question->findOrFail($id);
    }

    public function store($attributes)
    {
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $question = new Question();
            $question->designation_id = $attributes['designation_id'];
            $question->question = $attributes['question'];
            $question->status = $attributes['status'];
            $question->save();

            if($question->id) {
                foreach ($attributes['options'] as $key => $option) {
                    $questionOption = new QuestionOptions();
                    $questionOption->question_id = $question->id;
                    $questionOption->option = $option;
                    if($key == $attributes['answer']) {
                        $questionOption->is_answer = 1;
                    }
                    $questionOption->save();
                }

                DB::commit();
                $response = array('status' => TRUE, 'message' => 'Question added successfully');
            } else {
                throw new \Exception('Error while processing request', 1);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            $response = array('status' => FALSE, 'message' => 'Error while processing request');
        }
        return $response;
    }

    public function update($id, $attributes)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
