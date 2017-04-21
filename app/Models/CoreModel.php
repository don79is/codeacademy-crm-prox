<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreModel extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model::generateNewId();
        });
    }


    public function generateNewId()
    {
        if (isset($this->attributes['id'])) {

            return $this->attributes['id'];

        }
        return uuid4();
    }

    use SoftDeletes;

    public $incrementing = false;
}

