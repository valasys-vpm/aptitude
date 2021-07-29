<?php

namespace App\Repository\Registration;

use App\Models\Question;
use App\Models\QuestionOptions;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

class RegistrationRepository implements RegistrationInterface
{
    private $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    public function get($filters = [])
    {
        $query = $this->registration->whereNotNull('id');

        if(isset($filters['order_by']) && $filters['order_by']) {
            $query->orderBy($filters['order_by']);
        }

        if(isset($filters['with']) && in_array('designation', $filters['with'])) {
            $query->with('designation');
        }
        $query->orderBy('id', 'DESC');
        return $query->get();
    }

    public function find($id)
    {
        return $this->registration->with('designation')->findOrFail($id);
    }

    public function store($attributes)
    {
        $response = array('status' => FALSE, 'message' => 'Error while processing request');
        try {
            DB::beginTransaction();
            $registration = new Registration();
            $registration->first_name = $attributes['first_name'];
            $registration->last_name = $attributes['last_name'];
            $registration->email = $attributes['email'];
            $registration->mobile = $attributes['mobile'];
            $registration->designation_id = $attributes['designation_id'];
            $registration->current_ctc = $attributes['current_ctc'];
            $registration->expected_ctc = $attributes['expected_ctc'];
            $registration->can_join_in = $attributes['can_join_in'];
            $registration->save();

            if($registration->id) {
                DB::commit();
                $response = array('status' => TRUE, 'message' => 'Registration successful', 'user_details' => $registration);
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
