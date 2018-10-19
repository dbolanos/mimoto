<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotorcycleBrand;
use App\Models\TypeMotorcycle;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorcycle_brands  = MotorcycleBrand::where('status', true)->orderby('description')->get();
        $type_motorcycles   = TypeMotorcycle::where('status', true)->orderby('description')->get();

        //dd($motorcycle_brands, $type_motorcycles);

        return view('mimoto.main', compact('motorcycle_brands', 'type_motorcycles'));
    }

    public function contactenos(){
        return view('contact_us.contact_us');
    }
}
