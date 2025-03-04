<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('tentangkami', [AuthController::class, 'tentangkami'])->name('tentang-kami');
Route::get('visimisi', [AuthController::class, 'visimisi'])->name('visi&misi');
Route::get('sejarah', [AuthController::class, 'sejarah'])->name('sejarah');
Route::get('berita', [AuthController::class, 'berita'])->name('berita');
Route::get('admin', [AuthController::class, 'admin'])->name('admin');
