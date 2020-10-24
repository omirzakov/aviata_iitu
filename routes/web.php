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
    return view('home');
});

Route::get('/about/', function() {
    return view('about');
});

Route::get('/information/', function() {
    return view('information');
});

Route::get('/register/', function() {
    return view('register');
});

Route::get('/login/', function() {
    return view('login');
});

Route::get('/contacts/', function() {
    return view('contacts');
});

Route::get('/avia/list/', function() {
    return view('avia_list');
});