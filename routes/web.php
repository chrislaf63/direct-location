<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\MessageController;
use App\Models\Ad;

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
    Route::post('/favorites/add/{ad}', [FavoriteController::class, 'addFavorite'])->name('favorites.add');
    Route::delete('/favorites/remove/{ad}', [FavoriteController::class, 'removeFavorite'])->name('favorites.remove');
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');
});

Route::controller(AdminController::class)->middleware(['auth', 'admin'])->group(function () {
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
Route::get('annonces/categorie/{category}', [AdController::class, 'adsByCategory'])->name('ad.category');

Route::controller(AdController::class)->middleware('auth')->group(function () {
    Route::get('deposer-une-annonce', 'create')->name('ad.create');
    Route::post('annonces/deposer-une-annonce', 'store')->name('ad.store');
    Route::put('annonces/{id}', 'update')->name('ad.update');
    Route::delete('annonces/{ad}', 'destroy')->name('ad.destroy');
    Route::get('annonces/{ad}/edit', 'edit')->name('ad.edit');
    Route::put('annonces/{id}', 'update')->name('ad.update');
    Route::delete('annonces/{ad}', 'destroy')->name('ad.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
    Route::post('/conversations', [ConversationController::class, 'store'])->name('conversations.store');
    Route::get('/message/{id}', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages/', [MessageController::class, 'store'])->name('messages.store');
    Route::post('/messages/reply/{conversationId}', [MessageController::class, 'reply'])->name('messages.reply');
});

Route::get('/ad-data/{id}', function($id) {
    $ad = Ad::with('user', 'messages.sender')->findOrFail($id);
    return response()->json([
        'ad' => $ad,
        'messages' => $ad->messages,
    ]);
});

Route::get('/conversations/{id}/messages', [ConversationController::class, 'getMessages']);

require __DIR__.'/auth.php';
