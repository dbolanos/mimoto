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

        $cantons = Canton::all();

        $districts = District::all();

        //dd($provinces, $cantons, $districts);

        return view('auth.register', ['provinces'=>$provinces,'cantons' => $cantons, 'districts'=> $districts]);
    }
}
