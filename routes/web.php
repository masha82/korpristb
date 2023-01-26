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

Route::get('/regulasi', function () {
    return view('regulasi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/layanankorpri', function () {
    return view('layanan');
});

Route::get('/kegiatanbansos', function () {
    return view('bansos');
});

Route::get('/galerifoto', function () {
    return view('galeri');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/formjenislayanan', function () {
    return view('formjenislayanan');
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

Route::get('/formlayanan', function () {
    return view('formlayanan');
});

Route::get('/formpengumuman', function () {
    return view('formpengumuman');
});

Route::get('/formregulasi', function () {
    return view('formregulasi');
});

Route::get('/formstruktur', function () {
    return view('formstruktur');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('services', \App\Http\Controllers\JenisLayananController::class);
Route::resource('news', \App\Http\Controllers\BeritaController::class);
Route::resource('bansos', \App\Http\Controllers\BansosController::class);
Route::resource('gallery', \App\Http\Controllers\GaleriController::class);
Route::resource('layanan', \App\Http\Controllers\LayananController::class);
Route::resource('info', \App\Http\Controllers\PengumumanController::class);
Route::resource('hukum', \App\Http\Controllers\RegulasiController::class);
Route::resource('structure', \App\Http\Controllers\StrukturController::class);
