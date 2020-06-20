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

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group(['prefix' => 'addresses'], function () use ($router) {
        $router->get('/', 'AddressController@index');
        $router->get('{id}', 'AddressController@show');
        $router->post('', 'AddressController@store');
        $router->put('{id}', 'AddressController@update');
        $router->delete('{id}', 'AddressController@destroy');
    });

    $router->group(['prefix' => 'areas'], function () use ($router) {
        $router->get('', 'AreaController@index');
        $router->get('{id}', 'AreaController@show');
    });

    $router->group(['prefix' => 'cities'], function () use ($router) {
        $router->get('', 'CityController@index');
        $router->get('{id}', 'CityController@show');
    });

    //Finished
    $router->group(['prefix' => 'lawyers'], function () use ($router) {
        $router->get('/', 'LawyerController@index');
        $router->get('{id}', 'LawyerController@show');
        $router->post('', 'LawyerController@store');
        $router->put('{id}', 'LawyerController@update');
        $router->delete('{id}', 'LawyerController@destroy');
    });

    $router->group(['prefix' => 'lawyer-areas'], function () use ($router) {
        $router->get('{id}', 'LawyerAreaController@show');
        $router->post('', 'LawyerAreaController@store');
        $router->delete('{id}', 'LawyerAreaController@destroy');
    });

    $router->group(['prefix' => 'operation-cities'], function () use ($router) {
        $router->get('{id}', 'OperationCityController@show');
        $router->post('', 'OperationCityController@store');
        $router->delete('{id}', 'OperationCityController@destroy');
    });
});
