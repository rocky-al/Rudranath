<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('login', [UserController::class, 'get']);
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

// Route::Z('login',[UserController::class,'login']);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('login', [UserController::class, 'get']);


// Route::Z('login',[UserController::class,'login']);
