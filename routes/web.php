<?php

use App\Http\Controllers\Admin\HotelAddController;
use App\Http\Controllers\Admin\HotelEditController;
use App\Http\Controllers\Admin\HotelsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register',[RegisterController::class, 'get'])->name('register');
    Route::post('/register', [RegisterController::class, 'post']);
    
    Route::get('/login',[LoginController::class, 'get'])->name('login');
    Route::post('/login', [LoginController::class, 'post']);
});

Route::get('/admin/hotels/add',[HotelAddController::class, 'get']);
Route::post('/admin/hotels/add',[HotelAddController::class, 'post']);


Route::view('/','pages.home');
Route::view('/home','pages.home');

Route::get('/admin/hotels',[HotelsController::class, 'get'])->name('admin.hotels');
Route::get('/admin/hotels/edit/{id}', [HotelEditController::class, 'get'])->name('admin.hotels.edit');
Route::post('/admin/hotels/edit/{id}', [HotelEditController::class, 'post']);
