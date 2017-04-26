<?php

namespace App\Models;

class PrClient extends CoreModel
{
    protected $table = 'pr_client';

    protected $fillable = ['id', 'name', 'client_type'];

    protected $appends = ['is_company'];

    public function projects()
    {
        return $this->hasMany(PrProjects::class, 'client_id', 'id');
    }

    public function clientPersons()
    {
        return $this->hasMany(PrClientPersonsConnections::class, 'client_id', 'id')->with('personData');
    }

    public function getIsCompanyAttribute()
    {
        return $this->client_type == 'J';
    }

}


//protected $hidden = ['count','deleted_at','updated_at','created_at']; paslepti info kurios nenori paduoti vartotojui