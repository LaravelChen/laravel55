<?php

Route::get('/', function () {
    return new \App\Mail\Welcome();
});
Route::get('/show', function () {
    return view('welcome');
});
Route::get('/post/create', 'PostsController@index');
Route::post('/posts', 'PostsController@store');

Route::get('/show/all/dumpinfo', function () {
    $info = \App\Post::all();
    $allinfo = $info
        ->shuffle()
        ->dump()
        ->pluck('title')
        ->dump();
});

Route::get('show/test', function () {
    return new \App\Mail\Welcome();
});

Route::get('show/facade','PostsController@facade');

