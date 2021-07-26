<?php

namespace App\Repository\Registration;

interface RegistrationInterface
{
    public function get($filters);
    public function find($id);
    public function store($attributes);
    public function update($id, $attributes);
    public function destroy($id);
}
