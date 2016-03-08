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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutme', 'PagesController@aboutme');
Route::get('/demo', 'PagesController@store');	

// Route::get('/articles', 'ArticlesController@index');

// Route::get('/articles/create', 'ArticlesController@create');

// Route::post('/articles', 'ArticlesController@store');
// Route::resource('articles','ArticlesController');
Route::get('/articles', 'ArticlesController@index');
Route::get('/create', 'ArticlesController@create');
Route::post('/store', 'ArticlesController@store');
