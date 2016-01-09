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

Route::get('/', 'IndexController@index');
Route::get('send','IndexController@sendRed');
Route::get('chance','IndexController@addChance');
Route::get('pocket','IndexController@showPocket');
Route::get('share','IndexController@showShare');
//Route::get('show','IndexController@index');

//Qr
Route::get('qr','QrController@index');
Route::post('token','QrController@token');
