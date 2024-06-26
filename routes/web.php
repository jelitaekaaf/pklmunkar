<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;


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


  // untuk Route Backend Lainnya
  Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // route lain
    Route::resource('user', App\Http\Controllers\UsersController::class);
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



 

