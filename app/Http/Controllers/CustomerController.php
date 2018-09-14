<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Customer;
use App\Models\Province;
use App\Models\District;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function customerRegister(){

        $provinces = Province::all();

        $cantons = Canton::where('province_id', 1)->get();

        $districts = District::where('canton_id', 101)->get();

        //dd($provinces, $cantons, $districts);

        return view('auth.register', ['provinces'=>$provinces,'cantons' => $cantons, 'districts'=> $districts]);
    }
}
