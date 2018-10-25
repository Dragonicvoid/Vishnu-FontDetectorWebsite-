<?php

Route::get('/', function () {
    return view('home');
});

Route::any('/home/{name}', 'UserController@home');
Route::post('/home/', 'UserController@upload');
Route::get('/table/{name}', 'UserController@showTable');
