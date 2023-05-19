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
    $data = [
        'home' => 'home',
        'about_us' => 'about us',
        'shop' => 'shop'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    $data = [
        'home' => 'home',
        'about_us' => 'about us',
        'shop' => 'shop'
    ];
    return view('aboutUs', $data);
})->name('about-us');

Route::get('/shop', function () {
    $data = [
        'home' => 'home',
        'about_us' => 'about us',
        'shop' => 'shop'
    ];
    return view('shop', $data);
})->name('shop');