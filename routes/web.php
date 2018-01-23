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

/* default / route */
$router->get('/', function () use ($router) {
	$res['success'] = true;
	$res['result'] = "Hello there welcome to web api using lumen tutorial!";
	return response($res);
});

/*
 | ------------------------------------------
 | USER ROUTE
 | ------------------------------------------
 */
$router->post('/login', 'LoginController@index');
$router->post('/register', 'UserController@register');
// $router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@index']);
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@show']);
$router->post('/user/create', ['middleware' => 'auth', 'uses' =>  'UserController@store']);
$router->put('/user/update/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@update']);
$router->get('/user/delete/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@destroy']);

/*
 | ------------------------------------------
 | PROVINCE ROUTE
 | ------------------------------------------
 */
$router->get('/province', 'ProvinceController@index');
$router->get('/province/{id}', 'ProvinceController@show');
$router->post('/province/create', 'ProvinceController@store');
$router->put('/province/update/{id}', 'ProvinceController@update');
$router->get('/province/delete/{id}', 'ProvinceController@destroy');
$router->get('/province/{id}/cities', 'ProvinceController@city_by_province');

/*
 | ------------------------------------------
 | CITY ROUTE
 | ------------------------------------------
 */
$router->get('/city', 'CityController@index');
$router->get('/city/{id}', 'CityController@show');
$router->post('/city/create', 'CityController@store');
$router->put('/city/update/{id}', 'CityController@update');
$router->get('/city/delete/{id}', 'CityController@destroy');


/*
 | ------------------------------------------
 | TOURISM PLACE ROUTE
 | ------------------------------------------
 */
$router->get('/tourismplace', 'TourismPlaceController@index');
$router->get('/tourismplace/{id}', 'TourismPlaceController@show');
$router->post('/tourismplace/create', 'TourismPlaceController@store');
$router->put('/tourismplace/update/{id}', 'TourismPlaceController@update');
$router->get('/tourismplace/delete/{id}', 'TourismPlaceController@destroy');
