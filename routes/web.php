<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/register','UserController@viewregister');
Route::get('/login','UserController@viewlogin');
Route::get('/', 'UserController@toHome');
Route::get('/table', 'UserController@showTable')->middleware(\App\Http\Middleware\AuthUser::class);
Route::get('/logout', 'UserController@logout');
Route::get('/homeScan', 'UserController@scan');
Route::get('/home', 'UserController@home');
Route::get('/save/{hasil}', 'UserController@save')->middleware(\App\Http\Middleware\AuthUser::class);
Route::get('/gambar/{gambar}', 'UserController@lookimage')->middleware(\App\Http\Middleware\AuthUser::class);

Route::post('/addUser', 'UserController@addUser');
Route::post('/home', 'UserController@upload');
Route::post('/insert', 'UserController@uploadUser');
Route::post('/userlogin', 'UserController@login');
