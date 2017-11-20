<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qustion extends Model
{
    //
    protected $guarded  = [''];

    public function patient(){
        return $this->hasMany(patient::class);
    }
}
