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

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/form', 'CustomerController@addForm');
Route::get('/customers/form/{ID}', 'CustomerController@editForm');
Route::post('/customers/add', 'CustomerController@add');
Route::post('/customers/update', 'CustomerController@update');
