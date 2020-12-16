<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\HotelAddController;
use App\Http\Controllers\Admin\HotelEditController;
use App\Http\Controllers\Admin\BookingEditController;

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

Route::view('/','pages.home');
Route::view('/home','pages.home')->name('home');

Route::group(['middleware' => 'auth'], function() {
  Route::get('/checkin',[CheckinController::class, 'get'])->name('checkin');
  Route::post('/checkin',[CheckinController::class, 'post']);
  
  Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
  })->name('logout');
});


Route::group(['middleware' => ['auth', 'admin']], function() {
  Route::get('/admin/bookings',[BookingsController::class, 'get'])->name('admin.bookings');
  Route::get('/admin/bookings/delete/{booking}',[BookingsController::class, 'delete'])->name('admin.bookings.delete');
  
  Route::get('/admin/bookings/edit/{booking}', [BookingEditController::class, 'get'])->name('admin.bookings.edit');
  Route::post('/admin/bookings/edit/{booking}', [BookingEditController::class, 'post']);
  
  Route::get('/admin/hotels',[HotelsController::class, 'get'])->name('admin.hotels');
  Route::get('/admin/hotels/delete/{hotels}',[HotelsController::class, 'delete'])->name('admin.hotels.delete');
  
  Route::get('/admin/hotels/add',[HotelAddController::class, 'get'])->name('admin.hotels.add');
  Route::post('/admin/hotels/add',[HotelAddController::class, 'post']);
  
  Route::get('/admin/hotels/edit/{id}', [HotelEditController::class, 'get'])->name('admin.hotels.edit');
  Route::post('/admin/hotels/edit/{id}', [HotelEditController::class, 'post']);
});

Route::view('/aboutus','pages.aboutus')->name('aboutus');
Route::view('/tips','pages.tips')->name('tips');

