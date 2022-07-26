<?php

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
    return view('/front-end/pages/index');
});
Route::get('/login', function () {
    return view('/front-end/pages/login');
});
Route::get('/checkout', function () {
    return view('/front-end/pages/checkout');
});
Route::get('/success-checkout', function () {
    return view('/front-end/pages/succescheckout');
});
Route::get('/dashboard', function () {
    return view('/front-end/pages/dashboard');
});
