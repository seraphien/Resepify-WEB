<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

// Register Page
Route::get('/daftar', fn() => view('register'))->name('register');
Route::post('/daftar', [RegisterController::class, 'store']);

// Redirect root → login
Route::get('/', fn() => redirect('/login'));

// Login Page
Route::get('/login', fn() => view('login'))->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// ONLY ACCESSIBLE IF LOGIN
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    // WEB.PHP
    Route::get('/dashboard', [ResepController::class, 'dashboard'])->name('dashboard');


    // CRUD Resep
    Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');
    Route::get('/resep/create', [ResepController::class, 'create'])->name('resep.create');
    Route::post('/resep', [ResepController::class, 'store'])->name('resep.store');
    Route::get('/resep/{id}', [ResepController::class, 'show'])->name('resep.show');
    Route::get('/resep/{id}/edit', [ResepController::class, 'edit'])->name('resep.edit');
    Route::put('/resep/{id}', [ResepController::class, 'update'])->name('resep.update');
    Route::delete('/resep/{id}', [ResepController::class, 'destroy'])->name('resep.destroy');
});

// Profile Page
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('/settings/update', [ProfileController::class, 'updateSettings'])->name('settings.update');

Route::middleware('auth')->group(function () {

    // Profile Page
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Update informasi profile (email, telepon, lokasi)
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

    // Update pengaturan (username, password)
    Route::put('/profile/settings', [ProfileController::class, 'updateSettings'])->name('settings.update');
});