<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about us', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/visi misi', function () {
    return view('visimisi');
})->name('visimisi');

Route::get('/struktur organisasi', function () {
    return view('strukturorganisasi');
})->name('strukturorganisasi');
