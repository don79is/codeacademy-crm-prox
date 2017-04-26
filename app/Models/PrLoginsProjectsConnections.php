<?php

namespace App\Models;

class PrLoginsProjectsConnections extends CoreModel
{
    protected $table = 'pr_logins_projects_connections';

    protected $fillable = ['id', 'login_id', 'projects_id'];



    public function loginData ()
    {
        return $this->hasOne(PrLogins::class, 'id' ,'login_id' );
    }
    public function projectsData ()
    {
        return $this->hasOne(PrProjects::class, 'id' ,'projects_id' );
    }

}
