<?php

namespace App\Repository\Test;

interface TestInterface
{
    public function get_questions($designation_id);
    public function test_submit($attributes);
}
