<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4();
        });
    }


    public function generateNewId()
    {
        if (isset($this->attributes['id'])) {

            return $this->attributes['id'];

        }
        return Uuid::uuid4();
    }

    use SoftDeletes;

    public $incrementing = false;
}

