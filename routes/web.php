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
$router->post('/login', 'UserController@login');
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@index']);
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@show']);
$router->post('/user/create', 'UserController@store');
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
 | PLAN ROUTE
 | ------------------------------------------
 */
$router->get('/plan', 'PlanController@index');
$router->get('/plan/{id}', 'PlanController@show');
$router->post('/plan/create', 'PlanController@store');
$router->put('/plan/update/{id}', 'PlanController@update');
$router->get('/plan/delete/{id}', 'PlanController@destroy');

/*
 | ------------------------------------------
 | PLAN DETAIL ROUTE
 | ------------------------------------------
 */
$router->get('/plandetail', 'PlanDetailController@index');
$router->get('/plandetail/{id}', 'PlanDetailController@show');
$router->post('/plandetail/create', 'PlanDetailController@store');
$router->put('/plandetail/update/{id}', 'PlanDetailController@update');
$router->get('/plandetail/delete/{id}', 'PlanDetailController@destroy');
$router->get('/plandetail/{id}/plan', 'PlanDetailController@plandetail_by_plan');

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

/*
 | ------------------------------------------
 | EVENT ROUTE
 | ------------------------------------------
 */
$router->get('/event', 'EventController@index');
$router->get('/event/{id}', 'EventController@show');
$router->post('/event/create', 'EventController@store');
$router->put('/event/update/{id}', 'EventController@update');
$router->get('/event/delete/{id}', 'EventController@destroy');
$router->get('/event/{id}/tourismplace', 'EventController@event_by_tourismplace');

/*
 | ------------------------------------------
 | ROLE ROUTE
 | ------------------------------------------
 */
$router->get('/role', 'RoleController@index');
$router->get('/role/{id}', 'RoleController@show');
$router->post('/role/create', 'RoleController@store');
$router->put('/role/update/{id}', 'RoleController@update');
$router->get('/role/delete/{id}', 'RoleController@destroy');

/*
 | ------------------------------------------
 | PICTURE ROUTE
 | ------------------------------------------
 */
$router->get('/picture', 'PictureController@index');
$router->get('/picture/{id}', 'PictureController@show');
$router->post('/picture/create', 'PictureController@store');
$router->put('/picture/update/{id}', 'PictureController@update');
$router->get('/picture/delete/{id}', 'PictureController@destroy');
$router->get('/picture/{id}/tourismplace', 'PictureController@picture_by_tourismplace');

/*
 | ------------------------------------------
 | PACKAGE ROUTE
 | ------------------------------------------
 */
$router->get('/package', 'PackageController@index');
$router->get('/package/{id}', 'PackageController@show');
$router->post('/package/create', 'PackageController@store');
$router->put('/package/update/{id}', 'PackageController@update');
$router->get('/package/delete/{id}', 'PackageController@destroy');


/*
 | ------------------------------------------
 | PACKAGE ROUTE
 | ------------------------------------------
 */
$router->get('/packagedetail', 'PackageDetailController@index');
$router->get('/packagedetail/{id}', 'PackageDetailController@show');
$router->post('/packagedetail/create', 'PackageDetailController@store');
$router->put('/packagedetail/update/{id}', 'PackageDetailController@update');
$router->get('/packagedetail/delete/{id}', 'PackageDetailController@destroy');
$router->get('/packagedetail/{id}/package', 'PackageDetailController@packagedetail_by_package');

/*
 | ------------------------------------------
 | CITY ADVERTISEMENT
 | ------------------------------------------
 */
$router->get('/advertisement', 'AdvertisementController@index');
$router->get('/advertisement/{id}', 'AdvertisementController@show');
$router->post('/advertisement/create', 'AdvertisementController@store');
$router->put('/advertisement/update/{id}', 'AdvertisementController@update');
$router->get('/advertisement/delete/{id}', 'AdvertisementController@destroy');

/*
 | ------------------------------------------
 | FEEDBACK ROUTE
 | ------------------------------------------
 */
$router->get('/feedback', 'FeedbackController@index');
$router->get('/feedback/{id}', 'FeedbackController@show');
$router->post('/feedback/create', 'FeedbackController@store');
$router->put('/feedback/update/{id}', 'FeedbackController@update');
$router->get('/feedback/delete/{id}', 'FeedbackController@destroy');
