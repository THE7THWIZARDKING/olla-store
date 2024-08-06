<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/Product', function () {
    return view('frontend.product');
});
Route::get('/blog', function () {
    return view('frontend.Blog');
});


Route::get('/cart', function () {
    return view('frontend.cart');
});


Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/anish', function () {
    return view('frontend.Anish');
});
Route::get('/arjun', function () {
    return view('frontend.arjun');
});
Route::get('/customer-review', function () {
    return view('frontend.Customer');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
