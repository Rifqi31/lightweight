<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// creating route crud
Route::get('/', 'lightController@index'); 												// index 

Route::get('/lightdata', 'lightController@view_data'); 									// view all data
Route::post('/lightdata/create', 'lightController@create_data');						// creating process 

Route::get('/lightdata/view/{id}', 'lightController@view_edit_data');					// view selected data
Route::post('/lightdata/view/edit/{id}', 'lightController@process_edit_data');			// edit process

Route::get('/lightdata/delete/{id}', 'lightController@process_delete_data');			// delete process