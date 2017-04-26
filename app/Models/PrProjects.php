<?php

namespace App\Models;

use App\Http\Controllers\PrPersonsController;

class PrProjects extends CoreModel
{
    protected $table = 'pr_projects';

    protected $fillable = ['id', 'name', 'type_id', 'description', 'client_id'];

    public function client() //funkcija su $with
{
    return $this->hasOne(PrClient::class, 'id', 'client_id');
}
    public function types() //funkcija su $with
    {
        return $this->hasOne(PrProjectsTypes::class, 'id', 'types_id');
    }
    public function totalPersons() //funkcija su $with
    {
        return $this->hasMany(PrPersonsProjectTypeConnections::class, 'project_id', 'id');
    }

}
