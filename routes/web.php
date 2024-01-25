<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');
Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');


// Category Web Routes


Route::post('/create-category', [CategoryController::class, 'CategoryCreate'])->middleware('auth:sanctum');
Route::get('/list-category', [CategoryController::class, 'CategoryList'])->middleware('auth:sanctum');
Route::post('/delete-category', [CategoryController::class, 'CategoryDelete'])->middleware('auth:sanctum');
Route::post('/update-category', [CategoryController::class, 'CategoryUpdate'])->middleware('auth:sanctum');
Route::post('/category-by-id', [CategoryController::class, 'CategoryByID'])->middleware('auth:sanctum');



// Page Routes
Route::view('/', 'pages.home');
Route::view('/userRegistration','pages.auth.registration-page');
Route::view('/userLogin','pages.auth.login-page')->name('login');
Route::view('/userProfile','pages.dashboard.profile-page');




Route::view('/categoryPage', 'pages.dashboard.category-page');