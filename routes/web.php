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
    return view('front-end.pages.index');
})->name('index');
Route::get('/checkout', function () {
    return view('front-end.pages.checkout');
})->name('checkout');
Route::get('/success-checkout', function () {
    return view('front-end.pages.checkout');
})->name('success-checkout');

Route::get('/dashboard', function () {
    return view('front-end.pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
