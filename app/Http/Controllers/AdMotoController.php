<?php

namespace App\Http\Controllers;

use App\Models\ExtraMoto;
use Illuminate\Http\Request;
use App\Models\MotorcycleBrand;
use App\Models\TypeMotorcycle;

class AdMotoController extends Controller
{
    //

    public function getCreateAdMoto(){

        $motorcycle_brands  = MotorcycleBrand::where('status', true)->orderby('description')->get();
        $type_motorcycles   = TypeMotorcycle::where('status', true)->orderby('description')->get();

        $extras_moto = ExtraMoto::where('status', true)->orderby('description')->get();

        return view('ad_moto.create_ad_moto', compact('motorcycle_brands', 'type_motorcycles', 'extras_moto'));
    }
}
