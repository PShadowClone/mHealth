<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    protected $guarded  = [''];

    public function diagnose(){
        return $this->hasMany(diagnose::class);
    }

    public function drug(){
        return $this->belongsToMany(drug::class);
    }

    public function question(){
        return $this->hasMany(question::class);
    }

    public function escort(){
        return $this->hasMany(escort::class);
    }

    public function vital(){
        return $this->hasMany(vital::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsToMany(doctor::class, 'diagnoses');
    }

}
