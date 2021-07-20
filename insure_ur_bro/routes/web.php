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
    return view('layout.main');
});

Route::get('/services', function () {
    return view('layout.services');
});

Route::get('/service', function () {
    return view('layout.service');
});

Route::get('/service_order', function () {
    return view('layout.service_order');
});

Route::get('/companies', function () {
    return view('layout.companies');
});

Route::get('/profile', function () {
    return view('layout.profile');
});

Route::get('/company', function () {
    return view('layout.company');
});

Route::get('/profile_logged', function () {
    return view('layout.profile_logged');
});