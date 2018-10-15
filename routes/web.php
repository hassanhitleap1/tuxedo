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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/','HomeController@index');

$router->post('/normallogin','LoginController@normalLogin');

$router->post('/facebooklogin','LoginController@facebookLogin');

$router->post('/normalregister','LoginController@normalRegister');

$router->post('/facebookregister','LoginController@facebookRegister');

$router->get('/get-users','HomeController@getUsers');
