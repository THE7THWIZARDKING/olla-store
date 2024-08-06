<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, 'index'])->name('index');
Route::get("/", [PageController::class, 'about'])->name('about');
Route::get("/", [PageController::class, 'service'])->name('service');
Route::get("/", [PageController::class, 'anish'])->name('anihs');
Route::get("/", [PageController::class, 'cart'])->name('cart');
Route::get("/", [PageController::class, 'product'])->name('product');
Route::get("/", [PageController::class, 'blog'])->name('blog');
Route::get("/", [PageController::class, 'faq'])->name('faq);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
