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
Route::get('/', 'HomeController@showWelcome');

// Lorem Ipsum route
Route::get('/lorem', 'HomeController@loremIpsum');

// Random user route
Route::get('/user', 'HomeController@randomUser');

// xkcd password generator route
Route::get('/xkcd', 'HomeController@xkcd');