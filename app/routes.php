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

// Route::get('/', function() {
// 	return View::make('temp.my-first-view');
// });


// Route::get('/rolldice', function() 
// {
// 	return rand(1,6);
// });

// Route::get('/rolldice/{guess}', function($guess) 
// {
// 	if (!is_numeric($guess))
// 	{
// 		return Redirect::to('/rolldice');
// 	}

// 	$random = rand(1,6);
// 	$data = array(
// 		'random' => $random,
// 		'guess' => $guess 
// 		);
	
// 	return View::make('temp.roll-dice')->with($data);
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Amanda")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return View::make('temp.my-first-view')->with('name', $name);
//     }
// });

// Route::get('/', function() {
// 	return 'we are home';
// });

