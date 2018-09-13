<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //

    public function canton(){
        return $this->belongTo('App\Models\Canton');
    }
}
