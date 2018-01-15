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
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

/*
 | ------------------------------------------
 | CRUD Category Routes using auth middleware
 | ------------------------------------------
 */

$router->get('/category', 'CategoryAdsController@index');
$router->get('/category/{id}', 'CategoryAdsController@read');
$router->post('/category/create', 'CategoryAdsController@create');
$router->post('/category/update/{id}', 'CategoryAdsController@update');
$router->post('/category/delete/{id}', 'CategoryAdsController@delete');

/*
 | ------------------------------------------
 | CRUD Item Routes using auth middleware
 | ------------------------------------------
 */
$router->get('/item_ads', 'ItemAdsController@index');
$router->get('/item_ads/{id}', 'ItemAdsController@read');
$router->post('/item_ads/delete/{id}', 'ItemAdsController@delete');
$router->post('/item_ads/create', 'ItemAdsController@create');
$router->post('/item_ads/update/{id}', 'ItemAdsController@update');

/*
 | ------------------------------------------
 | PROVINCE ROUTE
 | ------------------------------------------
 */
$router->get('/province', 'ProvinceController@index');
$router->get('/province/{id}', 'ProvinceController@show');
$router->post('/province/save', 'ProvinceController@store');
$router->put('/province/update/{id}', 'ProvinceController@update');
$router->get('/province/delete/{id}', 'ProvinceController@destroy');
