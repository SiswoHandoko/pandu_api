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
$router->get('/logout/{id}', 'UserController@logout');
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@index']);
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@show']);
$router->post('/user/create', 'UserController@store');
$router->put('/user/update/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@update']);
$router->get('/user/delete/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@destroy']);
$router->get('/user/{id}/plans', 'UserController@user_by_plan');
$router->post('/user/forgotpassword', 'UserController@forgot_password');

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
$router->get('/city/{id}/tourismplaces', 'CityController@tourismplace_by_city');
$router->get('/city/{id}/package', 'CityController@package_by_city');

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
$router->get('/plan/delete/{id}/plandetails', 'PlanController@destroy_plandetail_by_plan');
$router->get('/plan/{id}/plandetails', 'PlanController@plandetail_by_plan');
$router->put('/plan/update/{id}/plandetails', 'PlanController@update_plandetail_by_plan');

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
$router->get('/tourismplace/{id}/events', 'TourismPlaceController@event_by_tourismplace');
$router->get('/tourismplace/{id}/pictures', 'TourismPlaceController@picture_by_tourismplace');

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
$router->get('/package/{id}/packagedetails', 'PackageController@packagedetail_by_package');

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

/*
 | ------------------------------------------
 | TIP AND TRICK ROUTE
 | ------------------------------------------
 */
$router->get('/tiptrick', 'TipTrickController@index');
$router->get('/tiptrick/{id}', 'TipTrickController@show');
$router->post('/tiptrick/create', 'TipTrickController@store');
$router->put('/tiptrick/update/{id}', 'TipTrickController@update');
$router->get('/tiptrick/delete/{id}', 'TipTrickController@destroy');

/*
 | ------------------------------------------
 | SPECIAL DEAL ROUTE
 | ------------------------------------------
 */
$router->get('/specialdeal', 'SpecialDealController@index');
$router->get('/specialdeal/{id}', 'SpecialDealController@show');
$router->post('/specialdeal/create', 'SpecialDealController@store');
$router->put('/specialdeal/update/{id}', 'SpecialDealController@update');
$router->get('/specialdeal/delete/{id}', 'SpecialDealController@destroy');

/*
 | ------------------------------------------
 | INFO PAYMENT ROUTE
 | ------------------------------------------
 */
$router->get('/infopayment', 'InfoPaymentController@index');
$router->get('/infopayment/{id}', 'InfoPaymentController@show');
$router->post('/infopayment/create', 'InfoPaymentController@store');
$router->put('/infopayment/update/{id}', 'InfoPaymentController@update');
$router->get('/infopayment/delete/{id}', 'InfoPaymentController@destroy');

/*
 | ------------------------------------------
 | PRIVATE GUIDE ROUTE
 | ------------------------------------------
 */
$router->get('/privateguide', 'PrivateGuideController@index');
$router->get('/privateguide/{id}', 'PrivateGuideController@show');
$router->post('/privateguide/create', 'PrivateGuideController@store');
$router->put('/privateguide/update/{id}', 'PrivateGuideController@update');
$router->get('/privateguide/delete/{id}', 'PrivateGuideController@destroy');

/*
 | ------------------------------------------
 | CUSTOM SENDING EMAIL
 | ------------------------------------------
 */
$router->post('/mail/sendmail', 'MailController@sendmail');

/*
 | ------------------------------------------
 | FCM CONNECTION
 | ------------------------------------------
 */
$router->post('/fcm/pushnotif', 'FcmController@sendnotif');
$router->post('/fcm/testSetFunction', 'FcmController@testSetFunction');

/*
 | ------------------------------------------
 | CUSTOM API REQUEST
 | ------------------------------------------
 */
$router->put('/custom/updatestatus/{id}', 'CustomController@update_status');
$router->get('/custom/dashboard', 'CustomController@dashboard');

/*
 | ------------------------------------------
 | CUSTOM API REQUEST
 | ------------------------------------------
 */
$router->get('/accesslog', 'AccessLogController@index');

/*
 | ------------------------------------------
 | MESSAGE ROUTE
 | ------------------------------------------
 */
$router->get('/message', 'MessageController@index');
$router->get('/message/{id}', 'MessageController@show');
$router->post('/message/create', 'MessageController@store');
$router->put('/message/update/{id}', 'MessageController@update');
$router->get('/message/delete/{id}', 'MessageController@destroy');
$router->get('/message/{id}/user', 'MessageController@get_by_user');
