<?php

Route::get('/', function () {
    return view('welcome');
});

# ------------------------------------
# Authentication
# ------------------------------------
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@logout');


# ------------------------------------
# Tasks
# ------------------------------------
Route::group(['middleware' => ['web']], function () {

    Route::get('/tasks', 'TaskController@getIndex');

    Route::get('/task/create', 'TaskController@getCreate');

    Route::get('/task/edit/{id?}', 'TaskController@getEdit');

});
