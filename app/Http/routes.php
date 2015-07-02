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

use App\Lib\Phone\Smartphone;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/phone','PagesController@phone');


Route::get('/shorten/{name}', function($name)
{
    dd(Bitly::shorten($name));
});

Route::get('/shorten/', function()
{
    return 'Enter link';
});



Route::get('about','PagesController@about');
