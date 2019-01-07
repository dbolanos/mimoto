<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //

    public function changePassword(){
        return view('Customer.changePassword');
    }

    public function updatePassword(Request $request){

        $request->validate([
            'current_password'  =>  'required|max:192',
            'password'          =>  'required|string|min:8|confirmed|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[.,;!$#%@*-\/_+&()=]).*$/',
        ]);

        if(Hash::check($request->current_password, Auth::user()->password)){
            $user           = User::find(Auth::id());
            $user->password = Hash::make($request->password);

            $user->save();
            $message        = ['type_message' => 'success', 'msg' => 'Cambio de contraseña correcto'];
        }
        else{
            $message        = ['type_message' => 'danger', 'msg' => 'La contraseña actual no es correcta'];
        }
        return redirect()->route('Customer.change.password')->with('message', $message);
    }
}
