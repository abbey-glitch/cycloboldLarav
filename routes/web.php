<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// admin route
Route::get('/admin/auth/login', [App\Http\Controllers\AdminController::class, 'adminAuthLogin']);

// process the admin login

// route
Route::get("/user/login", [App\Http\Controllers\UserController::class, 'userLoginPage']);
Route::get('/user/register', [App\Http\Controllers\UserController::class, 'userRegisterPage']);

// process the user login
Route::post('/user/reguser', [App\Http\Controllers\UserController::class, 'userRegister']);
