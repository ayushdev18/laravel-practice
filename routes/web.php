<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\AyushController;
use App\Http\Controllers\checkRequest;

use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});
route::get('user', [userController::class, 'userdata']);



Route::get('crud', [crudController::class, 'crud']);


Route::get('getdata', [AyushController::class, 'getdata']);


Route::post('check', [checkrequest::class, 'checkrequest']);
Route::view('random', 'checkrequest');



Route::view('login', 'login');
Route::post('login', [LoginController::class, 'login']);
