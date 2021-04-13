<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'index')->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::post('logout', LogoutController::class);
Route::resource('orders', OrderController::class);
Route::view('/register', 'register');
Route::post('register', RegisterController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
