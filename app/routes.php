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

Route::get('demo', function(){

	$users = User::all();

	

	return View::make('users.index')->with('users', $users);
});

Route::get('posts', function(){

	$posts = Post::all();

	

	return View::make('users.posts')->with('posts', $posts);
});

Route::get('products', function(){

	$products = Product::all();

	return View::make('users.products')->with('products', $products);
});

Route::get('/location', function(){

	$countries = Country::all();

	return View::make('users.place')->with('countries', $countries);
});