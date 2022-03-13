<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/register','UserController@viewregister');
Route::get('/login','UserController@viewlogin');
Route::get('/', 'UserController@toHome');

Route::any('/home/{name}', 'UserController@home');
Route::post('/home/', 'UserController@upload');
Route::get('/table/{name}', 'UserController@showTable');

Route::post('/insert', 'UserController@uploadUser');
