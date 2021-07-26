<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Designation\DesignationRepository;
use App\Repository\Question\QuestionRepository;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private $data;
    private $designationRepository;
    private $questionRepository;

    public function __construct(DesignationRepository $designationRepository, QuestionRepository $questionRepository)
    {
        $this->middleware('auth');
        $this->data = array();
        $this->designationRepository = $designationRepository;
        $this->questionRepository = $questionRepository;
    }

    public function index()
    {
        $this->data['resultQuestions'] = $this->questionRepository->get(['with' => ['designation','options']]);
        //dd($this->data['resultQuestions']->toArray());
        return view('admin.pages.question.index', $this->data);
    }

    public function create()
    {
        $this->data['resultDesignations'] = $this->designationRepository->get(['status' => '1']);
        return view('admin.pages.question.create', $this->data);
    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        $attributes['status'] = 1;
        $response = $this->questionRepository->store($attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('question.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function edit($id)
    {
        return view('admin.pages.question.edit', $this->data);
    }

    public function update($id, Request $request)
    {
        $attributes = $request->all();
        $response = $this->designationRepository->update(base64_decode($id), $attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('designation')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function destroy($id)
    {
        $response = $this->designationRepository->destroy(base64_decode($id));

        if($response['status'] == TRUE) {
            return redirect()->route('designation')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }
}
