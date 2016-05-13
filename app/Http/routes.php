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

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
