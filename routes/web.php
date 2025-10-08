<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//route home
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about us', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/visi misi', function () {
    return view('visimisi');
})->name('visimisi');

Route::get('/struktur organisasi', function () {
    return view('strukturorganisasi');
})->name('strukturorganisasi');


//route beerita
Route::get('/berita', function() {
    return view('berita');
})->name('berita');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

