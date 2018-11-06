<?php

namespace App\Http\Controllers;

use App\Models\ExtraMoto;
use Illuminate\Http\Request;
use App\Models\MotorcycleBrand;
use App\Models\TypeMotorcycle;
use App\Models\AdMoto;
use App\Models\Province;
use App\Models\Canton;
use App\Models\District;

class AdMotoController extends Controller
{
    //

    public function getCreateAdMoto(){

        $motorcycle_brands  = MotorcycleBrand::where('status', true)->orderby('description')->get();
        $type_motorcycles   = TypeMotorcycle::where('status', true)->orderby('description')->get();
        $extras_moto        = ExtraMoto::where('status', true)->orderby('description')->get();

        $provinces          = Province::all();
        $cantons            = Canton::where('province_id', 1)->get();
        $districts          = District::where('canton_id', 101)->get();



        return view('ad_moto.create_ad_moto', compact('motorcycle_brands', 'type_motorcycles', 'extras_moto', 'provinces','cantons', 'districts'));
    }

    public function createAdMoto(Request $request){
        $ad_moto = new AdMoto();

        $ad_moto->title                 = $request->ad_title;
        $ad_moto->description           = $request->ad_description;
        $ad_moto->model_year            = $request->ad_model_moto;
        $ad_moto->ad_brand              = $request->ad_brand;
        $ad_moto->type_motorcycle_id    = $request->ad_category_moto;

        $ad_moto->save();

    }
}
