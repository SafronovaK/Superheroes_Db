<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['nickname', 'real_name', 'prehistory', 'superpowers', 'catch_phrase'];

    public function images() {
        return $this->hasMany('App\Image');
    }
}
