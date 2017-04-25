<?php

namespace App\Models;

class PrPersonsTypes extends CoreModel
{
    protected $table = 'pr_person_types';

    protected $fillable = ['id', 'name', 'description'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];
}
