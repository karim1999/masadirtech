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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/daily', 'IndexController@storing_data_daily')->name('daily');




Route::get('/turn_off_popup', 'IndexController@turn_off_popup')->name('turn_off_popup');
Route::get('/turn_off_header', 'IndexController@turn_off_header')->name('turn_off_header');
Route::get('/switch_language', 'IndexController@switch_language')->name('switch_language');
Route::get('/switch_site_mode', 'IndexController@switch_site_mode')->name('switch_site_mode');