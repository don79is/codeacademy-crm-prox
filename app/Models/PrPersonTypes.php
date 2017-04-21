<?php

namespace App\Models;

class PrPersonTypes extends CoreModel
{
    protected $table = 'pr_person_types';

    protected $fillable = ['id', 'name', 'description'];
}
