<?php

namespace App\Models;

class Prpersons extends CoreModel
{
    protected $table = 'pr_persons';

    protected $fillable = ['id', 'name', 'email', 'phone'];
}
