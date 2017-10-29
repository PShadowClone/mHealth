<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnoses extends Model
{
    //

    protected $guarded  = [''];

    public function doctor(){
        return $this->belongTo(doctor::class);
    }

    public function patient(){
        return $this->belongTo(patient::class);
    }

    public function appoiment(){
        return $this->hasMany(appoiment::class);
    }
}
