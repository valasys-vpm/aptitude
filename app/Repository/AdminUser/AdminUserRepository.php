<?php

namespace App\Repository\AdminUser;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserRepository implements AdminUserInterface
{
    private $adminuser;

    public function __construct(User $adminuser)
    {
        $this->AdminUser = $adminuser;
    }

    public function get($filters = array())
    {
        $query = $this->AdminUser->whereNotNull('id');
        if(isset($filters['order_by']) && $filters['order_by']) {
            $query->orderBy($filters['order_by']);
        }

        if(isset($filters['status'])) {
            $query->whereStatus($filters['status']);
        }

        return $query->get();
    }

    public function find($id)
    {
        return $this->AdminUser->findOrFail($id);
    }

    public function store($attributes)
    {
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $adminuser = new User();
            $adminuser->name = ucfirst($attributes['name']);
            $adminuser->email = $attributes['email'];
            $adminuser->password = Hash::make($attributes['password']);
            $adminuser->save();
            if($adminuser->id) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'AdminUser added successfully');
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
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $adminuser = $this->find($id);
            $adminuser->name = ucfirst($attributes['name']);
            $adminuser->email = $attributes['email'];
            $adminuser->save();
            if($adminuser->id) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'AdminUser updated successfully');
            } else {
                throw new \Exception('Error while processing request', 1);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            $response = array('status' => FALSE, 'message' => 'Error while processing request');
        }
        return $response;
    }

    public function destroy($id)
    {
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $adminuser = $this->find($id);
            if($adminuser->delete()) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'AdminUser deleted successfully');
            } else {
                throw new \Exception('Error while processing request', 1);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            $response = array('status' => FALSE, 'message' => 'Error while processing request');
        }
        return $response;
    }
}
