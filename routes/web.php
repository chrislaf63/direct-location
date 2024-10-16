<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\MessageController;
use App\Models\Ad;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AdvancedSearchController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('users/{id}', 'edit')->name('user.edit');
    Route::put('users/{id}', 'update')->name('user.update');
    Route::delete('users/{id}', 'destroy')->name('user.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('favorites/add/{ad}', [FavoriteController::class, 'addFavorite'])->name('favorites.add');
    Route::delete('favorites/remove/{ad}', [FavoriteController::class, 'removeFavorite'])->name('favorites.remove');
    Route::get('favorites', [FavoriteController::class, 'index'])->name('favorites');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'display'])->name('admin');
    Route::get('admin/annonces-en-attente-de-validation', [AdminController::class, 'tovalidate'])->name('admin.tovalidate');
    Route::get('admin/annonces-en-attente-de-validation/{id}', [AdminController::class, 'show'])->name('ad.tovalidate.show');
    Route::put('admin/annonces-en-attente-de-validation/{id}', [AdminController::class, 'validate'])->name('ad.validate');
    Route::delete('admin/annonces-en-attente-de-validation/{id}', [AdminController::class, 'destroy'])->name('ad.todestroy');
    Route::get('admin/liste-des-utilisateurs', [AdminController::class, 'indexUsers'])->name('users');
});

Route::get('profile', [ProfileController::class, 'display'])->name('user');

Route::get('/regions/{region}/departments', [LocationController::class, 'getDepartments']);
Route::get('/departments/{department}/cities', [LocationController::class, 'getCities']);

Route::controller(AdController::class)->group(function () {
    Route::get('/', 'index')->name('ad.index');
    Route::get('annonces/{id}', 'show')->name('ad.show');
    Route::get('annonces/categorie/{category}', 'adsByCategory')->name('ad.category');
});

Route::controller(AdController::class)->middleware('auth')->group(function () {
    Route::get('mes-annonces', 'myads')->name('ad.myads');
    Route::get('deposer-une-annonce', 'create')->name('ad.create');
    Route::post('annonces/deposer-une-annonce', 'store')->name('ad.store');
    Route::get('annonces/{ad}/edit', 'edit')->name('ad.edit');
    Route::put('annonces/{id}', 'update')->name('ad.update');
    Route::delete('annonces/{ad}', 'destroy')->name('ad.destroy');
});

Route::controller(AdvancedSearchController::class)->group(function () {
    Route::get('recherche-avancee', 'searchForm')->name('ad.advanced-search');
    Route::post('recherche-avancee', 'search')->name('advanced-search');
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
