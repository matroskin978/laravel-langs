<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Helpers\Langs;
use App\Http\Controllers\PostController;

Route::get('/lang/{lang}', function ($lang) {
    if (!in_array($lang, Langs::LOCALES)) {
        abort(404);
    }

    App::setLocale($lang);

    $uri = Langs::getUri($lang);
    return redirect($uri);
})->name('setlang');

Route::prefix(Langs::getLocale())->middleware('langs')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/about', function () {
        return view('page.about');
    })->name('about');
});


