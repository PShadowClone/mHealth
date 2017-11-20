<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appoiment extends Model
{
    //

    protected $guarded  = [''];

    public function diagnose(){
        return $this->belongTo(diagnose::class);
    }

    public function laboratiry(){
        return $this->belongsToMany(laboratiry::class);
    }

    public function radiology(){
        return $this->belongsToMany(radiology::class);
    }

    public function drug(){
        return $this->belongsToMany(drug::class);
    }

}
