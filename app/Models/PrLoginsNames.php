<?php

namespace App\Models;

class PrLoginsNames extends CoreModel
{
    protected $table = 'pr_logins_names';

    protected $fillable = ['id', 'name'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];
}
