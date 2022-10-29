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

// Eric 03081200054 20SI2

Route::get('/', function () {
    return view('mahasiswa.index');
});

Route::get('/KHS', function () {
    return view('mahasiswa.index2');
});