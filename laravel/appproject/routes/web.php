<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invokabContr;

use App\Http\Controllers\CarController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\cleintsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\adminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});


// 1) Route::view('/template','template'); // direct view No any functionality 

//2 By function View by functionality 
Route::get('/template', function () {
    return view('template');
});


//3 call page by controller  
Route::get('/manage_contact',[contactController::class,'index']);

// call page by invokable controller  
Route::get('/invokable',invokabContr::class);
*/

 Route::view('/','web.index');
 Route::view('/index','web.index');
 Route::view('/about','web.about');
 Route::get('/contact',[contactController::class,'create']);
 Route::post('/contact',[contactController::class,'store']);
 Route::get('/signup',[customersController::class,'create']);
 Route::post('/signup',[customersController::class,'store']);
 Route::get('/signin',[customersController::class,'login']);
 Route::post('/auth',[customersController::class,'auth']);
 Route::get('/logout',[customersController::class,'logout']);
 Route::get('/profile',[customersController::class,'profile']);
 Route::get('/profile/{id}',[customersController::class,'edit']);
 Route::post('/profile/{id}',[customersController::class,'update']);
 
 //==========admin
 Route::get('/admin',[adminController::class,'index']);
 Route::post('/admin_auth',[adminController::class,'login']);
 Route::view('/dashboard','admin.dashboard');
 Route::get('/admin_logout',[adminController::class,'admin_logout']);
 
 
 Route::get('/manage_car',[CarController::class,'index']);
 Route::get('/manage_contact',[contactController::class,'index']);
 Route::get('/manage_customer',[customersController::class,'index']);
 Route::get('/manage_customer/{id}',[customersController::class,'destroy']);
 Route::get('/manage_status/{id}',[customersController::class,'status']);
 Route::get('/manage_employee',[employeesController::class,'index']);
 Route::get('/manage_car_cate',[categoriesController::class,'index']);
 Route::get('/manage_client',[cleintsController::class,'index']);
 
 
 