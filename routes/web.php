<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage.layout.landingpage');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Public: show create form and submit (no auth required)
Route::get('formulir', [PendaftaranController::class,'create'])->name('formulir');
Route::post('pendaftaran', [PendaftaranController::class,'store'])->name('pendaftaran.store');

// Protected: other pendaftaran actions require authentication
Route::middleware('auth')->group(function () {
    Route::resource('pendaftaran', PendaftaranController::class)->except(['create', 'store']);
});
