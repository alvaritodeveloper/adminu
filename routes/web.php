<?php

use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('infraestructures',InfrastructureController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('properties',PropertyController::class)
    ->only(['index', 'store', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
