<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showLogin');
Route::get('/login', 'HomeController@showLogin');
Route::Post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');


Route::get('orm-test', function () 
{
   return "Eloquent ORM is eloquent!";

});

Route::resource('posts', 'PostsController');

//links for resume and portfolio
Route::get('/portfolio', function() 
{
	return View::make('pages.portfolio');
});

Route::get('/resume', function() 
{
	return View::make('pages.resume');
});

Route::get('/sayhello/{$name}','HomeController@sayHello');
