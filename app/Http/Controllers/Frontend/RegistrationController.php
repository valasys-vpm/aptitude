<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\Designation\DesignationRepository;
use App\Repository\Registration\RegistrationRepository;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    private $data;
    private $designationRepository;
    private $registrationRepository;

    public function __construct(
        DesignationRepository $designationRepository,
        RegistrationRepository $registrationRepository
    )
    {
        $this->data = array();
        $this->designationRepository = $designationRepository;
        $this->registrationRepository = $registrationRepository;
    }

    public function register()
    {
        session()->forget('registered_user');
        session()->forget('resultQuestions');
        session()->forget('resultDesignation');

        $this->data['resultDesignations'] = $this->designationRepository->get(['status' => 1]);

        return view('frontend.pages.registration.register', $this->data);
    }

    public function register_submit(Request $request)
    {
        $attributes = $request->all();
        $response = $this->registrationRepository->store($attributes);

        if($response['status'] == TRUE) {
            session(['registered_user' => $response['user_details']]);
            return redirect()->route('aptitude.instruction')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function instruction()
    {
        if(empty(session()->get('registered_user'))) {
            return redirect()->route('index');
        }
        return view('frontend.pages.registration.instruction');
    }

}
