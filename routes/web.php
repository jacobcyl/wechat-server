<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    $result = file_get_contents('https://api.douban.com/v2/movie/in_theaters?start=0&count=10');
    return response()->json(json_decode($result));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
