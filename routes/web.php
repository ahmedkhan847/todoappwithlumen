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

$app->get('/', function () use ($app) {
    return $app->version();
});
//$app->get('api/login', 'AuthenticateController@authenticate');

//$app->get('/api/login','UsersController@authenticate');
// $app->post('/api/todo/','TodoController@store');
// $app->get('/api/todo/', 'TodoController@index');
// $app->get('/api/todo/{id}/', 'TodoController@show');
// $app->put('/api/todo/{id}/', 'TodoController@update');
// $app->delete('/api/todo/{id}/', 'TodoController@destroy');
$app->group(['prefix' => 'api/'], function ($app) {
    $app->get('login/','UsersController@authenticate');
    $app->post('todo/','TodoController@store');
    $app->get('todo/', 'TodoController@index');
    $app->get('todo/{id}/', 'TodoController@show');
    $app->put('todo/{id}/', 'TodoController@update');
    $app->delete('todo/{id}/', 'TodoController@destroy');
});