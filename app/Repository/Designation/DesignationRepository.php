<?php

namespace App\Repository\Designation;

use App\Models\Designation;
use Illuminate\Support\Facades\DB;

class DesignationRepository implements DesignationInterface
{
    private $designation;

    public function __construct(Designation $designation)
    {
        $this->designation = $designation;
    }

    public function get($filters = array())
    {
        $query = $this->designation->whereNotNull('id');
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
        return $this->designation->findOrFail($id);
    }

    public function store($attributes)
    {
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $designation = new Designation();
            $designation->title = ucfirst($attributes['title']);
            $designation->number_of_question = $attributes['number_of_question'];
            $designation->test_duration = $attributes['test_duration'];
            $designation->passing_marks = $attributes['passing_marks'];
            $designation->status = $attributes['status'];
            $designation->save();
            if($designation->id) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'Designation added successfully');
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
            $designation = $this->find($id);
            $designation->title = ucfirst($attributes['title']);
            $designation->number_of_question = $attributes['number_of_question'];
            $designation->test_duration = $attributes['test_duration'];
            $designation->passing_marks = $attributes['passing_marks'];
            $designation->status = $attributes['status'];
            $designation->save();
            if($designation->id) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'Designation updated successfully');
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
            $designation = $this->find($id);
            if($designation->delete()) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'Designation deleted successfully');
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
