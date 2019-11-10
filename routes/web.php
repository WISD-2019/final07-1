<?php

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
    return view('blog');
})->name('index');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('regular-page');
})->name('about');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('single-product-details', function () {
    return view('single-product-details');
})->name('single-product-details');