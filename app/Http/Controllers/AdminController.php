<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admin;
use App\Models\Roles;

class AdminController extends Controller
{
    //
    public function adminAuthLogin(){
        // dd('admin page');
        return view('auth.admin.login');
    }
    // admin sort
    public function adminRegisterPage(){
        return view('auth.admin.register');
    }

    
}
