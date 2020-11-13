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

$router->post('/createInventory', 'InventoryController@create');

$router->post('/createBook', 'BooksController@create');

$router->post('/createAuthor', 'AuthorsController@create');


//get list of each object type
$router->get('/listUsers', 'UsersController@index');

$router->get('/listInventory', 'InventoryController@index');

$router->get('/listBooks', 'BooksController@index');

$router->get('/listAuthors', 'AuthorsController@index');

//get a single entry of each object type
$router->get('/showUsers', 'UsersController@show');

$router->get('/showInventory', 'InventoryController@show');

$router->get('/showBooks', 'BooksController@show');

$router->get('/showAuthors', 'AuthorsController@show');

//store a single entry of each object type
$router->post('/storeUsers', 'UsersController@store');

$router->post('/storeInventory', 'InventoryController@store');

$router->post('/storeBooks', 'BooksController@store');

$router->post('/storeAuthors', 'AuthorsController@store');

//edit a single entry of each object type
$router->post('/editUsers', 'UsersController@edit');

$router->post('/editInventory', 'InventoryController@edit');

$router->post('/editBooks', 'BooksController@edit');

$router->post('/editAuthors', 'AuthorsController@edit');

//store the edit of a single entry of each object type
$router->post('/updateUsers', 'UsersController@update');

$router->post('/updateInventory', 'InventoryController@update');

$router->post('/updateBooks', 'BooksController@update');

$router->post('/updateAuthors', 'AuthorsController@update');

//delete single entry of each object type
$router->post('/destroyUsers', '   UsersController@destroy');

$router->post('/destroyInventory', 'InventoryController@destroy');

$router->post('/destroyBooks', 'BooksController@destroy');

$router->post('/destroyAuthors', 'AuthorsController@destroy');

