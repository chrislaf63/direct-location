<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(AdminController::class)->middleware('auth')->group(function () {
    Route::get('admin', 'display')->name('admin');
    Route::get('admin/tovalidate', 'tovalidate')->name('admin.tovalidate');
    Route::get('admin/adtovalidate/{id}', 'show')->name('ad.tovalidate.show');
    Route::put('admin/adtovalidate/{id}', 'validate')->name('ad.validate');
    Route::delete('admin/adtovalidate/{id}', 'destroy')->name('ad.todestroy');
});

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('users', 'index')->name('users');
    Route::get('users/{id}', 'edit')->name('user.edit');
    Route::put('users/{id}', 'update')->name('user.update');
    Route::delete('users/{id}', 'destroy')->name('user.destroy');

});

Route::get('/', [AdController::class, 'index'])->name('ad.index');
Route::get('annonces/{id}', [AdController::class, 'show'])->name('ad.show');
Route::get ('mes-annonces', [AdController::class, 'myads'])->name('ad.myads');



Route::get('profile', [ProfileController::class, 'display'])->name('user');

require __DIR__.'/auth.php';

Route::controller(AdController::class)->middleware('auth')->group(function () {
    Route::get('deposer-une-annonce', 'create')->name('ad.create');
    Route::post('annonces/deposer-une-annonce', 'store')->name('ad.store');
    Route::put('annonces/{id}', 'update')->name('ad.update');
    Route::delete('annonces/{id}', 'destroy')->name('ad.destroy');
    Route::get('annonces/{id}/edit', 'edit')->name('ad.edit');
    Route::put('annonces/{id}', 'update')->name('ad.update');
    Route::delete('annonces/{id}', 'destroy')->name('ad.destroy');
});
