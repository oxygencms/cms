<?php

// Uploads
Route::resource('upload', 'UploadController', ['only' => ['store', 'update', 'destroy']]);
Route::get('upload/list/{model_name}/{model_id}', 'UploadController@uploadsList')
     ->name('upload.list');