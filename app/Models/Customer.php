<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table    = 'customers';
    protected $guarded  = ['id'];

    public function district(){
        return $this->belongsTo('App\Models\District');
    }

    /**
     * Get the user record associated with the customer
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
