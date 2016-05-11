<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    #Shows all tasks - complete and incomplete
    Route::get('/tasks', 'TaskController@getIndex');

});
