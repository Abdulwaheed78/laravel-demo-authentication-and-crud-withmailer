<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('products', ProductController::class);
Route::get('send-mail', [mailcontroller::class, 'index']);

//register routes

Route::view('registernew', 'register');
Route::post('/save', [RegisterController::class,'store']);

//for login routes
Route::view('login', 'login');
Route::post('login',[logincontroller::class,'login']);


Route::get('/logout', [logoutcontriller::class,'perform']);
