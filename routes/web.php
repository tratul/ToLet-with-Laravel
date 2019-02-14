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

 // Route::get('/', function(){
 //   return view ('home.ownerhome');
 // });

 Route::get('/image', 'ImageController@index')->name('image');
Route::post('/image', 'ImageController@store');
Route::get('/', 'RegController@index')->name('home.index');
Route::post('/', 'RegController@store');

Route::get('/ownerhome', 'LoginController@home');
Route::post('/ownerhome', 'ImageController@store');

Route::get('/post', 'ImageController@image');
Route::post('/post', 'ImageController@store');

Route::get('/index', 'ToletController@index');
Route::post('/index', 'RegController@store');

Route::get('/show', 'ToletController@show');
Route::post('/index', 'RegController@store');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');
