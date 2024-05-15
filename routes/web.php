<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('Home.mainhome');
});
Route::get('/rental', function () {
    return view('Home.rental_page');
});
Route::get('/sound', function () {
    return view('Home.sound_page');
});
Route::get('/light', function () {
    return view('Home.lighting_page');
});
Route::get('/sales', function () {
    return view('Home.sales_page');
});
Route::get('/produkDetail', function () {
    return view('Home.produkDetail_page');
});
Route::get('/cart', function () {
    return view('Home.cart_page');
});
Route::get('/register', function () {
    return view('Account.Register_page');
});
Route::get('/login', function () {
    return view('Account.login_page');
});
Route::get('/forgotPass', function () {
    return view('Account.forgotPass_page');
});
