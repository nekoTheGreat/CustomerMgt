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

/*
Route::get('/login', 'UserController@loginView');
Route::post('/login', 'Auth\AuthController@login');
Route::get('/register', 'UserController@registerView');
Route::post('/register', 'UserController@register');
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/form', 'CustomerController@addForm');
Route::get('/customers/form/{ID}', 'CustomerController@editForm');
Route::post('/customers/add', 'CustomerController@add');
Route::post('/customers/update', 'CustomerController@update');
Route::post('/customers/process', 'CustomerController@process');
Route::get('/customers/delete/{ID}', 'CustomerController@delete');
