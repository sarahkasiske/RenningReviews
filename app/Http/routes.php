<?php


Route::get('/about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');


Route:: resource('events', 'EventController');


Route:: resource('reviews', 'ReviewController');

// Route::get('events.create', 'ReviewController@distance')->name('distance');
//
// Route::post('events.create', 'ReviewController@newDistance')->name('newDistance');





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
    Route::get('race/{slug}',['as'=> 'race.single','uses' =>'RaceController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('race',['uses' => 'RaceController@getIndex', 'as' => 'race.index' ]);
    Route::get('/about',  'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');
    Route:: resource('events', 'EventController');
    Route:: resource('reviews', 'ReviewController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
