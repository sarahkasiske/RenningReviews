<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function() {
//   return view('welcome');
// });

Route::get('hello', 'ControllerTwo@index')->name('sayhello');

Route::post('hello', 'ControllerTwo@index')->name('saidhello');

Route::get('add-race', 'ControllerTwo@races')->name('races');

Route::post('add-race', 'ControllerTwo@new_race')->name('new_race');

Route::get('rate-comment', 'ControllerTwo@comments')->name('comments');

Route::post('rate-comment', 'ControllerTwo@new_comment')->name('new_comment');

Route::get('races-json', 'ControllerTwo@races_json')->name('rjson');

Route::get('comments-json', 'ControllerTwo@comments_json')->name('cjson');

Route::get('ratings-json', 'ControllerTwo@ratings_json')->name('r2json');

Route::get('race-name-json{name}', 'ControllerTwo@race_name_json')->name('rnjson');

//Route::get('rate-comment', 'ControllerTwo@ratings')->name('ratings');

//Route::post('rate-comment', 'ControllerTwo@new_rating')->name('new_rating');

// Route::get('user', 'ControllerTwo@users')->name('user');
//
// Route::post('user', 'ControllerTwo@users)->name('new_user');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
