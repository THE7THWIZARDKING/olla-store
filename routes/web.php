<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, 'index'])->name('index');
Route::get("/about", [PageController::class, 'about'])->name('about');
Route::get("/service", [PageController::class, 'service'])->name('service');
Route::get("/blog", [PageController::class, 'blog'])->name('blog');
Route::get("/product", [PageController::class, 'product'])->name('product');
Route::get("/faq", [PageController::class, 'faq'])->name('faq');
Route::get("/anish", [PageController::class, 'Anish'])->name('anish');
Route::get("/arjun", [PageController::class, 'arjun'])->name('arjun');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
