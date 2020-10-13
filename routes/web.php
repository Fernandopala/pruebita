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


// holaaaaaaaaaaaaaaaaaaaaaa

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leandro', function () {
    return view('leandro');
})->name('leandro');

Route::get('/felipe', function () {
    return view('felipe');
})->name('felipe');

Route::get('pablo', function () {
    return view('pablito');
})->name('pablo');

Route::get('pala', function () {
    return view('pala');
})->name('pala');

Route::get('tomas', function () {
    return view('tomas');
})->name('tomas');



