<?php

namespace App\Models;

class PrLogins extends CoreModel
{
    protected $table = 'pr_logins';

    protected $fillable = ['id', 'user', 'pass', 'login_url', 'login_name_id'];

    protected $hidden = ['count','created_at','updated_at','deleted_at'];
}
