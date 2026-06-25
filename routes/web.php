<?php

use Illuminate\Support\Facades\Route;

/** Home route */
Route::view('/', 'welcome')->name('welcome');

/** Test layouts route */
Route::prefix('test')->group(fn() => [
    Route::view('root', 'layouts.root'),
]);
