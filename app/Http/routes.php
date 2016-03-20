<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'PostsController@index');
	Route::resource('users', 'UsersController');
	Route::resource('events', 'EventsController');
	Route::resource('posts', 'PostsController');
	Route::resource('comments', 'CommentsController');
	Route::resource('interests', 'InterestsController');
	Route::resource('event_types', 'EventTypesController');
});