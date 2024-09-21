<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [AdController::class, 'index'])->name('ad.index');
Route::get('annonces/{id}', [AdController::class, 'show'])->name('ad.show');
Route::get('deposer-une-annonce', [AdController::class, 'create'])->name('ad.create');
Route::post('annonces/deposer-une-annonce', [AdController::class, 'store'])->name('ad.store');
Route::put('annonces/{id}', [AdController::class, 'update'])->name('ad.update');
Route::delete('annonces/{id}', [AdController::class, 'destroy'])->name('ad.destroy');

Route::get('profile', [ProfileController::class, 'display'])->name('user');

require __DIR__.'/auth.php';
