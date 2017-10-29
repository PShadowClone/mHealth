<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escort extends Model
{
    //
    protected $guarded  = [''];

    public function patient(){
        return $this->hasMany(patient::class);
    }
}
