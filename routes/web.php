<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/about', function () {
    return view('page.about');
})->name('about');
