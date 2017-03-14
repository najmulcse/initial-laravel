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

Route::get('post','PostController@home');

Route::get('/teacher','TeacherController@listT');

Route::get('teacher/about','TeacherController@about');

Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');

Route::post('card/{id}/notes','NotesController@store');