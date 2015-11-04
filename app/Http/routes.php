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

$uri = $_SERVER['HTTP_HOST'];
var_dump($uri);
Route::get('init', 'HomeController@init');

//Route::get('setting', 'MyController@init');


