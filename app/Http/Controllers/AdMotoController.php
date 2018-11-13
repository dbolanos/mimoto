<?php

namespace App\Http\Controllers;

use App\Models\ExtraMoto;
use App\Models\TypeFuel;
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
        $type_fuels         = TypeFuel::where('status', true)->orderby('description')->get();

        $provinces          = Province::all();
        $cantons            = Canton::where('province_id', 1)->get();
        $districts          = District::where('canton_id', 101)->get();



        return view('ad_moto.create_ad_moto', compact('motorcycle_brands', 'type_motorcycles', 'extras_moto', 'provinces','cantons', 'districts', 'type_fuels'));
    }

    public function createAdMoto(Request $request){
        $ad_moto            = new AdMoto();
        $current_date       = new \DateTime();

        $ad_moto->title                 = $request->ad_title;
        $ad_moto->description           = $request->ad_description;
        $ad_moto->model_year            = $request->ad_model_moto;
        $ad_moto->motorcycle_brand_id   = $request->ad_brand;
        $ad_moto->type_motorcycle_id    = $request->ad_category_moto;
        $ad_moto->displacement          = $request->ad_moto_displacement;
        $ad_moto->mileage               = $request->ad_moto_mileage;
        $ad_moto->extras_moto           = json_encode($request->input('extras_moto'));
        $ad_moto->email_ad              = 'admoto@test.com';
        $ad_moto->phone_ad              = '34345454';
        $ad_moto->district_id           = $request->district;
        $ad_moto->type_fuel_id          = $request->ad_type_fuel;
        $ad_moto->type_ad_moto_id       = 1;

        $ad_moto->ad_start_date         = $current_date->format('Y-m-d H:i:s');
        $end_date                       = $current_date->modify('+2 hours');
        $ad_moto->ad_end_date           = $end_date->format('Y-m-d H:i:s');

        $ad_moto->save();

    }
}
