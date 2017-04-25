<?php

namespace App\Models;

class PrClientPersonsConnections extends CoreModel
{
    protected $table = 'pr_client_persons_connections';

    protected $fillable = ['id', 'client_id', 'persons_id', 'positions_id', 'comment'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];

    public function personsData ()
    {
        return $this->hasOne(PrPersons::class, 'id' ,'persons_id' );
    }
    public function clientData ()
    {
        return $this->hasOne(PrClient::class, 'id' ,'client_id' );
    }
    public function ClientPersonsPositionsData ()
    {
        return $this->hasOne(PrClientPersonsPositions::class, 'id' ,'positions_id' );
    }





}
