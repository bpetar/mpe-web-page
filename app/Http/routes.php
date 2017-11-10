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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::auth();

Route::resource('projects','ProjectsController');

Route::get('/news', 'NewsController@index');

Route::get('/tags/{tag}','ProjectsController@showTags');

Route::get('/', 'HomeController@index');

