<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Designation\DesignationRepository;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    private $data;
    private $designationRepository;

    public function __construct(DesignationRepository $designationRepository)
    {
        $this->middleware('auth');
        $this->data = array();
        $this->designationRepository = $designationRepository;
    }

    public function index()
    {
        $this->data['resultDesignations'] = $this->designationRepository->get();
        return view('admin.pages.designation.index', $this->data);
    }

    public function create()
    {
        return view('admin.pages.designation.create');
    }

    public function store(Request  $request)
    {
        $attributes = $request->all();
        $attributes['status'] = 1;
        $response = $this->designationRepository->store($attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('designation.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function edit($id)
    {
        $this->data['resultDesignation'] = $this->designationRepository->find(base64_decode($id));
        return view('admin.pages.designation.edit', $this->data);
    }

    public function update($id, Request $request)
    {
        $attributes = $request->all();
        $response = $this->designationRepository->update(base64_decode($id), $attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('designation.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function destroy($id, Request $request)
    {
        $response = $this->designationRepository->destroy(base64_decode($id));

        if($response['status'] == TRUE) {
            return redirect()->route('designation.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }
}
