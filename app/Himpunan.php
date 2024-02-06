<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Himpunan extends Model
{
    protected $fillable = ['title','desc', 'picture', 'basement', 'loc'];
    protected $primaryKey='id';
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            if(empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()}=Str::uuid();
            }
        });
    }
}
