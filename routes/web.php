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
/**
 * show all free index page
 */
Route::get('/', 'BiblisController@index')->name('home');
Route::get('/sort', 'BiblisController@sort')->name('sort');

/**
 * BiblisController
 */
Route::resource('biblis','BiblisController');
/**
 * UsersController
 */
Route::resource('users','UsersController');

Route::post('/', 'BiblisController@store');

