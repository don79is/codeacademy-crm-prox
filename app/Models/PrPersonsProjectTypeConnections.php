<?php

namespace App\Models;

class PrPersonsProjectTypeConnections extends CoreModel
{
    protected $table = 'pr_persons_project_type_connections';

    protected $fillable = ['id', 'name', 'project_id', 'persons_id', 'persons_types_id'];

}
