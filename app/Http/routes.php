<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'RestaurantController@GetTopRestaurant');

Route::get('/Login', function () {
    return view('menu.login');
});

Route::post('/Login', 'UserController@Login');

Route::get('/Logout','UserController@Logout');

Route::get('/Register', function () {
    return view('menu.register');
});

Route::post('/Register', 'UserController@Register');

Route::get('/Profile', function () {
    return view('menu.profile');
});

Route::get('/Reserve/{id}', 'RestaurantController@GetRestaurantInfo');

Route::post('/Reserve', 'RestaurantController@Reserve');

Route::get('/RestaurantList', 'RestaurantController@GetAllRestaurant');

Route::get('/search', 'RestaurantController@SearchRestaurant');

Route::get('/RestaurantDetail/{id}', 'RestaurantController@GetRestaurantDetail');

Route::post('/PostReview', 'RestaurantController@PostReview');

Route::get('/ReservationOnGoing', 'RestaurantController@GetUpcomingReservation');

Route::get('/ReservationHistory', 'RestaurantController@GetReservationHistory');

Route::get('/home', 'HomeController@index');