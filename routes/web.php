<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Health-check.
$router->get('/', function () use ($router) {
    return ['status' => 200, 'app_name' => env('APP_NAME')];
});

// Crud example
$router->get('/user',           'UserController@index');
$router->get('/user/{id}',      'UserController@read');
$router->post('/user',          'UserController@create');
$router->put('/user/{id}',      'UserController@update');
$router->delete('/user/{id}',   'UserController@delete');

