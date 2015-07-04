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



Route::get('/phone', function(){
    App::register('SmartphoneServiceProvider');
    echo App::make('smart');
});


Route::get('/shorten/{name?}', function($name = null)
{
    if($name === null){
        return 'Enter link';
    }
    else{
        dd(Bitly::shorten($name));
    }

});




Route::get('about','PagesController@about');
