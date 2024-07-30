<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class Controller extends BaseController
{
    //
    // public function userLoginPage(){
    //     // dd('admin page');
    //     return view('auth.login');
    // }

    // // register user route
    // public function userRegisterPage(){
    //     return view('auth.register');
    // }
    // public function userRegister(Request $request){
    //     dd($request->all());
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:user',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);
    //     if($validator->fails()){
    //         return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
    //     }
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);
    //     dd($user);
    //     $user->save();
    //     return redirect('/user/login')->with('toast_success', 'user created successfully');
    // }

}
