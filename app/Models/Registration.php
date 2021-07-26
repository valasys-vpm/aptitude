<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = array();
    public $timestamps = true;

    public function designation()
    {
        return $this->hasOne(Designation::class, 'id', 'designation_id');
    }
}
