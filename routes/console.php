<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('login', [UserController::class, 'get']);
Route::get('login', [UserController::class, 'login']);
