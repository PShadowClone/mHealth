<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    //
    protected $guarded  = [''];

    public function clinic(){
        return $this->belongsTo(clinic::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function diagnoses(){
        return $this->hasMany(diagnoses::class);
    }
    public function patient(){
        return $this->belongsToMany(patient::class , 'diagnoses');
    }
}
