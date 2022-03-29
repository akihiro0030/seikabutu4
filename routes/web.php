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

Route::get('/games','GameController@index');
Route::get('/create', 'GameController@create');
Route::get('/games/{game}', 'GameController@show');
Route::post('/games', 'GameController@store');
