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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/list/create', 'ListController@getCreate');

    Route::post('/list/create', 'ListController@postCreate');

    Route::get('/tasks', 'TaskController@getIndex');

    Route::get('/task/create', 'TaskController@getCreate');

    Route::post('/task/create','TaskController@postCreate');

    Route::get('/task/edit/{id}', 'TaskController@getEdit');

    Route::post('/tasks/edit/{id}', 'TaskController@postEdit');

    Route::get('/task/complete/{id}', 'TaskController@getComplete');

    Route::post('/task/complete/{id}', 'TaskController@postComplete');

    Route::get('/task/delete/{id}', 'TaskController@getDelete');

});
