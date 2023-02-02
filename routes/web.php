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

Route::resource('/', \App\Http\Controllers\BerandaController::class);

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/formgaleri', function () {
    return view('formgaleri');
});

Route::get('/formkegbansos', function () {
    return view('formkegbansos');
});

Route::get('/formpengumuman', function () {
    return view('formpengumuman');
});

Route::get('/formstruktur', function () {
    return view('formstruktur');
});

Auth::routes();
// tabel
Route::get('/news/data', [App\Http\Controllers\BeritaController::class, 'anyData'])->name('news.data');
Route::get('/regulasi/data', [App\Http\Controllers\RegulasiController::class, 'anyData'])->name('regulasi.data');
Route::get('/strukturorg/data', [App\Http\Controllers\StrukturController::class, 'anyData'])->name('strukturorg.data');
Route::get('/services/data', [App\Http\Controllers\JenisLayananController::class, 'anyData'])->name('services.data');
Route::get('/fotolayanan/data', [App\Http\Controllers\LayananController::class, 'anyData'])->name('fotolayanan.data');

//resources
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('services', \App\Http\Controllers\JenisLayananController::class);
Route::resource('news', \App\Http\Controllers\BeritaController::class);
Route::resource('bansos', \App\Http\Controllers\BansosController::class);
Route::resource('gallery', \App\Http\Controllers\GaleriController::class);
Route::resource('fotolayanan', \App\Http\Controllers\LayananController::class);
Route::resource('info', \App\Http\Controllers\PengumumanController::class);
Route::resource('hukum', \App\Http\Controllers\RegulasiController::class);
Route::resource('strukturorg', \App\Http\Controllers\StrukturController::class);
Route::resource('regulasi', \App\Http\Controllers\RegulasiController::class);
