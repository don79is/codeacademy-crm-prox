<?php

namespace App\Models;

class PrLoginsProjectsConnections extends CoreModel
{
    protected $table = 'pr_logins_projects_connections';

    protected $fillable = ['id', 'login_id', 'projects_id'];
}
