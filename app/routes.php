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

// Random user route
Route::get('/user', function() {
    return View::make('user');
});

// Random user output route
Route::post('/userlist', function() {
    $number = Input::get('number');
    for($i = 0; $i <= $number; $i++){
        $faker = Faker\Factory::create();
        $user = $faker->unique()->name;
    };
    return View::make('/userlist')->with('user', $user);

});

// xkcd password generator route
Route::get('/xkcd', function() {
    return View::make('xkcd');
});

// Lorem Ipsum route
Route::get('/lorem', function() {
    return View::make('lorem');
});

// Lorem Ipsum text output route
Route::post('/loremtext', function() {
    $number = Input::get('number');
	$generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($number);
    $text = implode('<p>', $paragraphs);
    return View::make('/loremtext')->with('text', $text);
});
