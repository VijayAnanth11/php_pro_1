<?php

use Illuminate\Support\Facades\Route;

//user
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CardController;

//admin
use App\Http\Controllers\ProductController;




//user route
Route::get('/', function () {
    return view('userscreens.home');
});
Route::get('/about', function () {
    return view('userscreens.about');
});
Route::get('/orders', function () {
    return view('userscreens.orders');
});
Route::get('/contact', function () {
    return view('userscreens.contact');
});
Route::get('/viewcard', function () {
    return view('userscreens.card');
});

Route::resource('/menu', MenuController::class);
Route::resource('/card', CardController::class);

//admin route
Route::get('/adminlogin', function () {
    return view('adminscreens.admin_login');
});
Route::get('/dashboard', function () {
    return view('adminscreens.dashboard');
});

Route::resource('/product', ProductController::class);

Route::get('/placed_orders', function () {
    return view('adminscreens.placed_orders');
});
Route::get('/messages', function () {
    return view('adminscreens.messages');
});
