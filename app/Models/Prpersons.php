<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prpersons extends Model
{
    use SoftDeletes;

    protected $table = 'pr_persons';

    protected $fillable = ['id','name','email','phone'];
}
