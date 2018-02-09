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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'ClientController@index');
Route::get('create_client', 'ClientController@create');
Route::post('create_client', 'ClientController@store');
Route::get('edit_client/{id}', 'ClientController@edit');
Route::put('edit_client/{id}', 'ClientController@update');
Route::delete('delete_client/{id}', 'ClientController@destroy');