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
	Route::get('/', 'HomeController@index');

	Route::auth();

	Route::get('/me', 'ProfileController@index');

	Route::post('/createpost',
	[
		'uses'=>'PostController@postCreatePost',
		'as'=>'post.create'
	]);

	Route::get('/{id}', 'ProfileController@show');

	Route::get('/pending', 'HomeController@pending');