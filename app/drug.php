<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drug extends Model
{
    //
    protected $guarded  = [''];

    public function patient(){
        return $this->belongsToMany(patient::class);
    }

    public function appoiment(){
        return $this->belongsToMany(appoiment::class);
    }
}
