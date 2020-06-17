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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('adresses', 'AddressController@index');
$router->get('address/{id}', 'AddressController@show');
$router->post('address/{id}', 'AddressController@store');
$router->put('address/{id}', 'AddressController@update');
$router->patch('address/{id}', 'AddressController@update');
$router->delete('address/{id}', 'AddressController@delete');

$router->get('areas', 'AreaController@index');
$router->get('area/{id}', 'AreaController@show');

$router->get('cities', 'CityController@index');
$router->get('city/{id}', 'CityController@show');

$router->get('lawyers', 'LawyerController@index');
$router->get('lawyer/{id}', 'LawyerController@show');
$router->post('lawyer/{id}', 'LawyerController@store');
$router->put('lawyer/{id}', 'LawyerController@update');
$router->patch('lawyer/{id}', 'LawyerController@update');
$router->delete('lawyer/{id}', 'LawyerController@delete');

$router->get('lawyer-areas/{id}', 'LawyerAreaController@show');
$router->post('lawyer-area/{id}', 'LawyerAreaController@store');
$router->delete('lawyer-area/{id}', 'LawyerAreaController@delete');

$router->get('operation-cities/{id}', 'OperationCityController@show');
$router->post('operation-city/{id}', 'OperationCityController@store');
$router->delete('operation-city/{id}', 'OperationCityController@delete');
