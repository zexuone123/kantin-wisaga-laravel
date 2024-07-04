<?php


use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Models\User;


Route::get('/', function () {
    return view('login');
});

Route::get ("/home",[HomeController::class,"index"]);
Route::get ("/about",[HomeController::class,"about"]);
Route::get ("/contact",[HomeController::class,"contact"]);
Route::get ("/menu",[HomeController::class,"menu"]);
Route::get ("/keranjang",[HomeController::class,"keranjang"]);

Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get ("/create",[AdminController::class,"create"]);
Route::post ("/create-store",[AdminController::class,"store"])->name('store');
Route::post ("/destroy",[AdminController::class,"hapus"])->name('destroy');
Route::get ("/edit/{id}",[AdminController::class,"formEdit"])->name('edit');
Route::post ("update",[AdminController::class,"update"])->name('update');


// Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Route::post('/cart/add', 'CartController@addItem')->name('cart.add');
// File: routes/web.php

// Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
//     Route::get('/', 'AdminController@index')->name('dashboard');
//     Route::resource('products', 'Admin\ProductController');
//     Route::resource('users', 'Admin\UserController');
//     // Route::resource('settings', 'Admin\SettingController');
// });