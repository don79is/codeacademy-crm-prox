<?php

namespace App\Models;

class PrPersons extends CoreModel
{
    protected $table = 'pr_persons';

    protected $fillable = ['id', 'name', 'email', 'phone'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];
}
