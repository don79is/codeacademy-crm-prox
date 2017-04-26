<?php

namespace App\Models;

class PrProjectsTypes extends CoreModel
{
    protected $table = 'pr_projects_types';

    protected $fillable = ['id', 'name', 'types', 'description'];


}
