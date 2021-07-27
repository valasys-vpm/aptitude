<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\AdminUser\AdminUserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $data;
    private $adminuserRepository;

    public function __construct(AdminUserRepository $adminuserRepository)
    {
        $this->middleware('auth');
        $this->data = array();
        $this->adminuserRepository = $adminuserRepository;
    }
    
    public function index()
    {
        $this->data['resultUsers'] = $this->adminuserRepository->get();
        return view('admin.pages.user.index', $this->data);
    }

    public function create()
    {
        return view('admin.pages.user.create');
    }
    
    public function store(Request $request)
    {
        $attributes = $request->all();
        $response = $this->adminuserRepository->store($attributes);
        if($response['status'] == TRUE) {
            return redirect()->route('user.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    
    public function edit($id)
    {
        $this->data['resultUser'] = $this->adminuserRepository->find(base64_decode($id));
        return view('admin.pages.user.edit', $this->data);
    }

    
    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $response = $this->adminuserRepository->update(base64_decode($id), $attributes);

        if($response['status'] == TRUE) {
            return redirect()->route('user.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }
    }

    public function destroy($id, Request $request)
    {
        $response = $this->adminuserRepository->destroy(base64_decode($id));

        if($response['status'] == TRUE) {
            return redirect()->route('user.index')->with('success', $response['message']);
        } else {
            return back()->withInput();
        }

    }
}
