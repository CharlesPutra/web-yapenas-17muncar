<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StructureOrganization;
use Illuminate\Support\Facades\Route;

//route home
Route::get('/', [HomeController::class, 'index'])->name('home');


//route about us
Route::get('/about us',[ProfileController::class, 'tentangkami'])->name('aboutus');
Route::get('/visi misi',[ProfileController::class, 'visimisi'])->name('visimisi');

//route struktur organisasi
Route::get('/struktur organisasi',[StructureOrganization::class, 'index'])->name('strukturorganisasi');


//route beerita
Route::get('/berita',[BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

