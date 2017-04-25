<?php

namespace App\Models;

class PrProjectsTypes extends CoreModel
{
    protected $table = 'pr_projects_types';

    protected $fillable = ['id', 'name', 'types', 'description'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];
}
