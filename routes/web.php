<?php

use Illuminate\Support\Facades\Route;

/** Home route */
Route::view('/', 'welcome')->name('welcome');
/** test layouts route */
Route::prefix('test')->group(fn() => [
    Route::view('app', 'layouts.app'),
    Route::view('auth', 'layouts.auth'),
]);
/** Pages routes */
Route::view('about', 'pages.about')->name('pages.about');
Route::view('contact', 'pages.contact')->name('pages.contact');
/** Auth routes */
Route::prefix('auth')->group(fn() => [
    Route::view('login', 'auth.login')->name('auth.login'),
    Route::view('signup', 'auth.signup')->name('auth.signup'),
    Route::view('forgot-password', 'auth.forgot-password')->name('auth.forgotPassword'),
    Route::view('reset-password', 'auth.reset-password')->name('auth.resetPassword'),
    Route::view('verify-email', 'auth.verify-email')->name('auth.verifyEmail'),
    Route::view('verify-phone', 'auth.verify-phone')->name('auth.verifyPhone'),
]);
