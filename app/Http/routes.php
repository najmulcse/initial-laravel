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






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This is middleware group route
|
*/
Route::group(['middleware'=>['web']], function(){


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('post','PostController@home');

    Route::get('/teacher','TeacherController@listT');

    Route::get('teacher/about','TeacherController@about');

    Route::get('cards','CardsController@index');
    Route::get('cards/{card}','CardsController@show');
    Route::get('cards/{card}/edit','CardsController@edit');

    Route::post('card/{card}/notes','NotesController@store');

    Route::get('notes/{note}/edit','NotesController@edit');

    Route::patch('notes/{note}','NotesController@update');

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('post','PostController@home');

Route::get('/teacher','TeacherController@listT');

Route::get('teacher/about','TeacherController@about');

Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');
Route::get('cards/{card}/edit','CardsController@edit');

Route::post('card/{card}/notes','NotesController@store');

Route::get('notes/{note}/edit','NotesController@edit');

Route::patch('notes/{note}','NotesController@update');
Route::auth();

Route::get('/home', 'HomeController@index');
