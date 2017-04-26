<?php

namespace App\Models;

class PrLoginsProjectsConnections extends CoreModel
{
    protected $table = 'pr_logins_projects_connections';

    protected $fillable = ['id', 'login_id', 'projects_id'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];

    public function loginData ()
    {
        return $this->hasOne(PrLogins::class, 'id' ,'login_id' );
    }
    public function projectsData ()
    {
        return $this->hasOne(PrProjects::class, 'id' ,'projects_id' );
    }

}
