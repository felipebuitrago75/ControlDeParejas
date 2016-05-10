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

Route::get ('/','FrontController@index');
Route::get ('index','FrontController@index');
Route::get ('registro','FrontController@registro');
Route::get ('entrevista','FrontController@entrevista');
Route::get ('contacto','FrontController@contacto');
Route::get ('nosotros','FrontController@nosotros');
Route::get('/home', 'HomeController@index');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::auth();
Route::get('/home', 'HomeController@index');
