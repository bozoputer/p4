<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/tasks', 'TaskController@getIndex');

    Route::get('/tasks/create', 'TaskController@getCreate');

    Route::get('/task/edit/{id?}', 'TaskController@getEdit');

});
