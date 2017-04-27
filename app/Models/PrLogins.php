<?php

namespace App\Models;

class PrLogins extends CoreModel
{
    protected $table = 'pr_logins';

    protected $fillable = ['id', 'user', 'pass', 'login_url', 'login_name_id'];

    public function loginsNames() //funkcija su $with
    {
        return $this->hasOne(PrLoginsNames::class, 'id', 'login_name_id');
    }
}
