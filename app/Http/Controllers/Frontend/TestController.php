<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\RegistrationQuestion;
use App\Repository\Test\TestRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    private $data;
    private $testRepository;

    public function __construct(TestRepository $testRepository)
    {
        $this->data = array();
        $this->testRepository = $testRepository;
    }

    public function start_test(Request $request)
    {
        //dd($request->session()->get('registered_user')->designation_id);

        //get random question from database
        $response = $this->testRepository->get_questions($request->session()->get('registered_user')->designation_id);

        if($response['status'] == TRUE) {
            return redirect()->route('aptitude.test.index');
        } else {
            return back()->with('error', $response['message']);
        }
    }

    public function test()
    {
        if(empty(session()->get('registered_user'))) {
            return redirect()->route('index');
        }
        return view('frontend.pages.test.index');
    }

    public function test_submit(Request $request)
    {
        $attributes = $request->all();

        $response = $this->testRepository->test_submit($attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('aptitude.test.result');
        } else {
            return back()->with('error', $response['message']);
        }
    }

    public function test_result()
    {
        if(empty(session()->get('registered_user'))) {
            return redirect()->route('index');
        }
        $registration_id = session()->get('registered_user')->id;
        $this->data['resultRegistrationQuestions'] = RegistrationQuestion::whereRegistrationId($registration_id)->get();
        $this->data['attempted'] = RegistrationQuestion::whereRegistrationId($registration_id)->whereNotNull('option_id')->count();
        $this->data['total_marks'] = RegistrationQuestion::whereRegistrationId($registration_id)->sum('mark');
        $this->data['resultRegistration'] = Registration::with('designation')->findOrFail($registration_id);
        //dd($this->data['resultRegistration']->toArray());

        session()->forget('registered_user');
        session()->forget('resultQuestions');
        session()->forget('resultDesignation');

        //Send Mail
        $details = $this->data;
        Mail::send('frontend.pages.email.result', $details, function ($email) use ($details){
            $email->to(['sagar@valasys.com', 'tejaswi@valasys.com'])->subject('Result for '.$this->data['resultRegistration']->designation->title.' aptitude test');
        });

        return view('frontend.pages.test.result', $this->data);
    }

}
