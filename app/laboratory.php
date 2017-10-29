<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    //
    protected $guarded  = [''];

    public function appoiment(){
        return $this->belongsToMany(appoiment::class);
    }
}
