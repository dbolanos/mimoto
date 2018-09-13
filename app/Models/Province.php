<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //

    public function cantons(){
        return $this->belongsToMany('App\Models\Canton');
    }
}
