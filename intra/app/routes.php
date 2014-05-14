<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*        *\
	Users
\*        */
/*
Route::get('/login', array(
	'before' => 'guest',
	'uses' => 'UserController@Login'
));

Route::get('/{login?}', array(
	'before' => 'auth',
	'uses' => 'UserController@Show'
));
*/
Route::resource('group', 'GroupController', ['only' => ['index', 'create', 'store', 'show', 'edit']]);
