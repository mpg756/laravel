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


Route::get('/shorten', function()
{
    dd(Bitly::shorten('http://google.com/'));
});



Route::get('about','PagesController@about');
