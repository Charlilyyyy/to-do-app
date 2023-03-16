<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index']);
Route::get('/add_user',[HomeController::class,'add_user']);
Route::post('/store_user',[HomeController::class,'store_user']);
Route::get('/user/{id}/details',[HomeController::class,'user_details']);
Route::post('/store_user_todo',[HomeController::class,'store_user_todo']);