<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index']);
Route::get('/add_user',[HomeController::class,'add_user']);
Route::post('/store_user',[HomeController::class,'store_user']);