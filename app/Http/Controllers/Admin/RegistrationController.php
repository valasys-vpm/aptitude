<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Registration\RegistrationRepository;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    private $data;
    private $registrationRepository;
   
    public function __construct(RegistrationRepository $registrationRepository)
    {
        $this->middleware('auth');
        $this->data = array();     
        $this->registrationRepository = $registrationRepository;
    }

    public function index()
    {
        $this->data['resultRegistrations'] = $this->registrationRepository->get(['with'=> ['designation']]);
        return view('admin.pages.registration.index', $this->data);
    }

    public function show($id)
    {
        $this->data['resultRegistration'] = $this->registrationRepository->find(base64_decode($id));
        return view('admin.pages.registration.show', $this->data);
    }

}
