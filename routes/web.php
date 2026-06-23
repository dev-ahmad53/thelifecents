<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home & Pages
Route::get('/', [ContactController::class, 'home'])->name('home');
Route::get('/about', [ContactController::class, 'about'])->name('about');
Route::get('/services', [ContactController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('contact.store');

// Blog Routes
Route::get('/blog', [ContactController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [ContactController::class, 'showBlog'])->name('blog.detail');