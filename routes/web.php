<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
})->name('home');

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

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return "Connected to database: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "Database connection error: " . $e->getMessage();
    }
});


Route::get('/registrasi', [AuthController::class, 'showRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.tampil');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::get('/test', function () {
    return view('pendaftaran.index');
});

Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password/update', [AuthController::class, 'resetPassword'])->name('password.update');
