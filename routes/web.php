<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/regulasi', function () {
    return view('regulasi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kegiatan-bansos', function () {
    return view('bansos');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/formlayanan', function () {
    return view('formlayanan');
});

Route::get('/formberita', function () {
    return view('formberita');
});

Route::get('/formgaleri', function () {
    return view('formgaleri');
});

Route::get('/formkegbansos', function () {
    return view('formkegbansos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('services', \App\Http\Controllers\JenisLayananController::class);
