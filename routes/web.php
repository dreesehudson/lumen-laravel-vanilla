<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//create each object type
$router->post('/register','UsersController@register');
$router->post('/User', 'UserController@create');
$router->post('/Inventory', 'InventoryController@create');
$router->post('/Book', 'BooksController@create');
$router->post('/Author', 'AuthorsController@create');

//get list of each object type
$router->get('/Users', 'UsersController@index');
$router->get('/Inventory', 'InventoryController@index');
$router->get('/Books', 'BooksController@index');
$router->get('/Authors', 'AuthorsController@index');

//get a single entry of each object type
$router->get('/Users/{id}', 'UsersController@show');
$router->get('/Inventory/{id}', 'InventoryController@show');
$router->get('/Books/{id}', 'BooksController@show');
$router->get('/Authors/{id}', 'AuthorsController@show');

//store the edit of a single entry of each object type
$router->put('/Users/{id}', 'UsersController@update');
$router->put('/Inventory/{id}', 'InventoryController@update');
$router->put('/Books/{id}', 'BooksController@update');
$router->put('/Authors/{id}', 'AuthorsController@update');

//delete single entry of each object type
$router->delete('/Users/{id}', '   UsersController@destroy');
$router->delete('/Inventory/{id}', 'InventoryController@destroy');
$router->delete('/Books', 'BooksController@destroy');
$router->delete('/Authors/{id}', 'AuthorsController@destroy');

