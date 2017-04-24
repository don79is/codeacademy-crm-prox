<?php

namespace App\Models;

class PrClientPersonsConnections extends CoreModel
{
    protected $table = 'pr_client_persons_connections';

    protected $fillable = ['id','description','client_id','	persons_id','positions_id','comment'];
}
