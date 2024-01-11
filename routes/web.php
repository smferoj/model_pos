<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);






// Page Routes
Route::view('/', 'pages.home');
Route::view('/userRegistration','pages.auth.registration-page');

