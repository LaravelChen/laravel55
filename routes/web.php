<?php

Route::get('/', function () {
    return new \App\Mail\Welcome();
});
Route::get('/post/create', 'PostsController@index');
Route::post('/posts', 'PostsController@store');

Route::get('/show/all/dumpinfo',function (){
   $info=\App\Post::all();
   $allinfo=$info
       ->shuffle()
       ->dump()
       ->pluck('title')
       ->dump();
});

