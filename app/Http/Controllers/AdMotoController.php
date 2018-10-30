<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotorcycleBrand;

class AdMotoController extends Controller
{
    //

    public function getCreateAdMoto(){

        $motorcycle_brands  = MotorcycleBrand::where('status', true)->orderby('description')->get();

        return view('ad_moto.create_ad_moto', compact('motorcycle_brands', 'type_motorcycles'));
    }
}
