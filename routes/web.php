<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// cek tmplate
Route::get('tes', function () {
    return view('layouts.admin');
});

// route admin BACKEND
Route::group(['previx'=>'admin','middleware'=>'auth'], function () {
    Route::get('/', function () {
    return view('admin.index');
});
    // route BACKEND lainnya
});

//cek tmplate FRONTEND
Route::get('tes', function () {
    return view('layouts.front');
});

// ROUTE FRONTEND
Route::get('/', [FrontController::class, 'index']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('track', [FrontController::class, 'track']);
Route::get('about', [FrontController::class, 'about']);
Route::get('detail', [FrontController::class, 'detail']);



 

