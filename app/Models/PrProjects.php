<?php

namespace App\Models;

class PrProjects extends CoreModel
{
    protected $table = 'pr_projects';

    protected $fillable = ['id', 'name', 'type_id', 'description', 'client_id'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];

}
