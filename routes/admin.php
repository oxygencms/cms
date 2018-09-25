<?php

// routes for shared behavior. maybe even extract them us API endpoints
Route::patch('update/active/{model_name}/{model_id}', 'ModelController@updateActive');
Route::delete('seek-and-destroy/{model_name}/{model_id}', 'ModelController@destroy');

// Dashboard
Route::get('/', 'DashboardController@index')->name('admin.dashboard');

// Uploads
Route::resource('upload', 'UploadController', ['only' => ['store', 'update', 'destroy']]);
Route::get('upload/list/{model_name}/{model_id}', 'UploadController@uploadsList')
     ->name('upload.list');

// Phrases
Route::resource('phrase', 'PhraseController', ['except' => 'show']);

// Blocks
Route::resource('block', 'BlockController', ['except' => 'show']);

// Menus
Route::resource('menu', 'MenuController', ['except' => 'show']);

// Menu Links
Route::resource('menu.link', 'LinkController', ['except' => ['index', 'show']]);

// Roles
Route::resource('role', 'RoleController', ['except' => 'show']);

// Permissions
Route::resource('permission', 'PermissionController', ['except' => 'show']);

// Users
Route::resource('user', 'UserController', ['except' => 'show']);

// Venues
//Route::resource('venue', 'VenueController', ['except' => 'show']);

// Venue Pitches
//Route::resource('pitch', 'PitchController', ['except' => ['create', 'index', 'show']]);
//Route::get('venue/{venue}/pitch/create', 'PitchController@create')->name('pitch.create');
//
//// Venue Owner Registration Requests
//Route::get('venue-owner-registration-request', 'VenueOwnerRegistrationRequestController@index')
//    ->name('venue-owner-registration-request.index');
//Route::get(
//    'venue-owner-registration-request/{model}/send-activation-email',
//    'VenueOwnerRegistrationRequestController@sendActivationEmail'
//)->name('venue-owner-registration-request.send-activation-email');