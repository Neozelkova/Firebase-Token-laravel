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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/home', function(){
	$FirebaseTokenGenerator = new J42\LaravelFirebase\Token('nQJ80MrrR4PZxM9OsPIBgBI9ulJPl3cnC2Xtls76');
	$Firebase = App::make('firebase');

	$token = $FirebaseTokenGenerator->create(['uid' => 'Neozelkova', 'country' => 'USA']);

	$Firebase->setToken($token);

	return View::make('home')->with('token', $token);
});