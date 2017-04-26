<?php

namespace App\Models;

class PrPersonsProjectTypeConnections extends CoreModel
{
    protected $table = 'pr_persons_project_type_connections';

    protected $fillable = ['id', 'name', 'project_id', 'persons_id', 'persons_types_id'];

    public function personsData ()
    {
        return $this->hasOne(PrPersons::class, 'id' ,'persons_id' );
    }
    public function projectsData ()
    {
        return $this->hasMany(PrProjects::class, 'id' ,'project_id' );
    }
    public function personsTypesData ()
    {
        return $this->hasOne(PrPersonsTypes::class, 'id' ,'persons_types_id' );
    }
}
