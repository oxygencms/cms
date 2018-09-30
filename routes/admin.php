<?php

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