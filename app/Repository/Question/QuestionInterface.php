<?php

namespace App\Repository\Question;

interface QuestionInterface
{
    public function get($filters);
    public function find($id);
    public function store($attributes);
    public function update($id, $attributes);
    public function destroy($id);
}
