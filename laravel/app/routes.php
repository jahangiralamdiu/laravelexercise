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

//Route::get('/', 'HomeController@showWelcome');


/*Route::get('/', function()
{
    return View::make('hello');
});*/

Route::get('/', function()
{
    return 'Hello world one';
});

Route::get('welcometest', function()
{
    return 'Hello world one';
});

Route::get('welcome/sayhello', 'WelcomeController@sayHello'
);

Route::get('welcomejahangir', 'WelcomeController@index'
);

Route::get('hellojahangir', function()
{
    return View::make('hellojahangir');
});