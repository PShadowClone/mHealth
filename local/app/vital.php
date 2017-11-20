<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vital extends Model
{
    //

    protected $guarded  = [''];

    public function patient(){
        return $this->hasMany(patient::class);
    }
}
