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

// Home page route
Route::get('/', function() {
    return View::make('home');
});

// Lorem Ipsum route
Route::get('/lorem', function() {
    return View::make('lorem');
});

// Random user route
Route::get('/user', function() {
    return View::make('user');
});

// xkcd password generator route
Route::get('/xkcd', function() {
    return View::make('xkcd');
});

Route::post('/lorem', function() {
    $count = Input::get('count');
});

Route::get('/lorem', function() {
    return View::make('/lorem');
});