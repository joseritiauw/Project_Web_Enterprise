<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rute untuk menampilkan halaman
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/artikel', [PageController::class, 'artikel'])->name('artikel');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Rute untuk menangani pengiriman form kontak
Route::post('/kontak', [PageController::class, 'handleContactForm'])->name('kontak.submit');