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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('login',
	array(
		'as' => 'login',
		'uses' => 'UsersController@login',
		)


	);

Route::post('/login',
	array(
		'as' => 'login',
		'uses' => 'UsersController@handledLogin',
		)


	);

Route::get('/profile',
	array(
		'as' => 'profile',
		'uses' => 'UsersController@profile',
		)


	);
Route::get('/logout',
	array(
		'as' => 'logout',
		'uses' => 'UsersController@logout',
		)


	);

Route::resource('user', 'UsersController');
