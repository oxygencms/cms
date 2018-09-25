<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login
Auth::routes();

// Set Locale
Route::get('lang/{lang}', 'LanguageController@setLocale')->name('language');

// Social Login
Route::get('social/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// User profiles
Route::prefix('user/{user}')->middleware(['auth', 'personal'])->group(function () {

    // Dashboard
    Route::get('dashboard', 'UserController@dashboard')->name('user.dashboard');

    // Profile
    Route::get('profile', 'UserController@profile')->name('user.profile');

    // Update user's personal information
    Route::patch('profile', 'UserController@profileUpdate')->name('user.profile.update');

    // Update user's password
    Route::patch('password', 'UserController@passwordUpdate')->name('user.password.update');
});