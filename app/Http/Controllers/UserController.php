<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    // display the register page
    public function userRegisterPage(){
        return view('auth.register');
    }
    //show the login page
    public function userLoginPage()
    {
        return view('auth.login');
    }

    // process the user data
    public function userRegister(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect('/user/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/user/login');
    }

    // process the user login
    
}
