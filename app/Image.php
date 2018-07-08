<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['hero_id', 'path'];

    public function hero() {
        $this->belongsTo('App\Hero');
    }
}
