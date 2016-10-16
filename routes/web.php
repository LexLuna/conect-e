<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login','LoginController@auth')->name('login');

Route::get('/{provider}/redirect','SocialAuthController@redirect');
Route::get('/{provider}/callback','SocialAuthController@callback');

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function() {
  Route::get('/', 'AdminController@index');
  Route::resource('principal','PrincipalController');
   	
});