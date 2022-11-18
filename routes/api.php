<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EpisodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->group(function () {
    Route::name('articles.')
        ->controller(ArticleController::class)
        ->prefix('articles')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{article}', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::patch('/{article}', 'update')->name('update');
            Route::delete('/{article}', 'destroy')->name('destroy');
        });

    Route::name('courses.')
        ->controller(CourseController::class)
        ->prefix('courses')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{course}', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::patch('/{course}', 'update')->name('update');
            Route::delete('/{course}', 'destroy')->name('destroy');
        });

    Route::name('episodes.')
        ->controller(EpisodeController::class)
        ->prefix('episodes')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{episode}', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::patch('/{episode}', 'update')->name('update');
            Route::delete('/{episode}', 'destroy')->name('destroy');
        });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
