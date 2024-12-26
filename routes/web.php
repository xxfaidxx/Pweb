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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/dokumen', function () {
    return view('nav.dokumen');
});

Route::get('/berita', function () {
    return view('nav.berita');
});

Route::get('/info', function () {
    return view('nav.info');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/sd', function () {
    return view('jenjang.sd');
});

Route::get('/smp', function () {
    return view('jenjang.smp');
});

Route::get('/sma', function () {
    return view('jenjang.sma');
});

Route::get('/infosekolah', function () {
    return view('infosekolah');
});
