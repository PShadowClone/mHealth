<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    protected $guarded  = [''];

    //
    public function doctor(){
        return $this->hasMany(doctor::class);
    }
}
