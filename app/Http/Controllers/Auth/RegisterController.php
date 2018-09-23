<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'        => 'required|string|max:255',
            'first_surname'     => 'required|string|max:255',
            'second_surname'    => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'phone'             => 'required|string|max:11',
            'province'          => 'required',
            'canton'            => 'required',
            'district'          => 'required',
            'password'          => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['first_name'] . ' ' . $data['first_surname'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
        ]);

        $customer                   = new Customer();
        $customer->first_name       = $data['first_name'];
        $customer->first_surname    = $data['first_surname'];
        $customer->second_surname   = $data['second_surname'];
        $customer->email            = $data['email'];
        $customer->district_id      = $data['district'];
        $customer->address_line     = $data['address_line'];
        $customer->user_id          = $user->id;

        $customer->save();

        //Attach Customer role
        $user->roles()->attach(4);

        return $user;


    }
}
