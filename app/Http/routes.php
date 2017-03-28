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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('article/{id}','ArticleController@show');
Route::get('/home', 'HomeController@index');
Route::get('/community','CommunityController@index');
Route::get('/community/{id}','CommunityController@show');
Route::get('/images', function () {
    return 'denied';
});



Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('manage_comments','CommentController');
    Route::resource('article','ArticleController');
    Route::resource('photo','PhotoController');
    }
);

Route::post('comment', 'CommentController@store');