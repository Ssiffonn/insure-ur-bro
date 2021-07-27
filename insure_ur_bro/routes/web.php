<?php

use App\Http\Controllers\orderInsertController;
use App\Http\Controllers\show;
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
})->name('main');

// Route::get('/services', function () {
//     return view('layout.services');
// });

Route::get('services', [show::class, 'showServices']);

Route::get('/service', function () {
    return view('layout.service');
});

// Route::get('/service_order', function () {
//     return view('layout.service_order');
// });

// Route::get('service_order/{id}/{Cid}', [show::class, 'serviceOrder'])->name('service_order');

Route::get('service_order/{id}/{Cid}', [orderInsertController::class, 'insertform'])->name('service_order');
Route::post('create', [orderInsertController::class, 'insert'])->name('create');

Route::get('companies', [show::class, 'showCopmanies'])->name('companies');



Route::get('/profile', [show::class, 'login'])->name('profile');

Route::get('company/{id}', [show::class, 'showCompany'])->name('company');

Route::get('/profile_logged', [show::class, 'logged'])->name('profile_logged');