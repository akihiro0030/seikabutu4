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
Route::get('/games/create', 'GameController@create');
Route::get('/games/{game}', 'GameController@show');
Route::post('/games', 'GameController@store');
Route::get('/search', 'GameController@search');
Route::get('/categor/{category_id}', 'CategoryController@index');
Route::post('/games/{game}', 'Review_commentsController@store');
Route::get('/games/{game}/review/create','Review_commentsController@create');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
