<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //

    public function getCantonsDistricts(Request $request){
        if(!is_null($request->province_id)){
            $cantons = Canton::where('province_id', $request->province_id);
            $districts = District::where('canton_id', $cantons->first()->id);
        }
        return json_encode(['cantons'=> $cantons, 'districts' => $districts]);
    }
}
