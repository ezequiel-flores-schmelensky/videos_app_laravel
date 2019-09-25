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
use App\Video;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', array(
    'as' => 'home',
    'uses' => 'HomeController@index'
));

//Rutas del controlador de Videos
Route::get('/crear-video', array(
    'as' => 'createVideo',
    'middleware' => 'auth',
    'uses' => 'VideoController@createVideo'
));

Route::post('/guardar-video', array(
    'as' => 'saveVideo',
    'middleware' => 'auth',
    'uses' => 'VideoController@saveVideo'
));

Route::post('/update-video/{video_id}', array(
    'as' => 'updateVideo',
    'middleware' => 'auth',
    'uses' => 'VideoController@update'
));

Route::get('/miniatura/{filename}', array(
    'as' => 'imageVideo',
    'uses' => 'VideoController@getImage'
));

Route::get('/video/{video_id}', array(
    'as' => 'detailVideo',
    'uses' => 'VideoController@getVideoDetail'
));

Route::get('/video-file/{filename}', array(
    'as' => 'fileVideo',
    'uses' => 'VideoController@getVideo'
));

Route::post('/comment', array(
    'as' => 'comment',
    'middleware' => 'auth',
    'uses' => 'CommentController@store'
));

Route::get('/delete-comment/{comment_id}', array(
    'as' => 'commentDelete',
    'middleware' => 'auth',
    'uses' => 'CommentController@delete'
));

Route::get('/delete-video/{video_id}', array(
    'as' => 'videoDelete',
    'middleware' => 'auth',
    'uses' => 'VideoController@delete'
));

Route::get('/editar-video/{video_id}', array(
    'as' => 'videoEdit',
    'middleware' => 'auth',
    'uses' => 'VideoController@edit'
));

Route::get('/buscar/{search?}', array(
    'as' => 'videoSearch',
    'uses' => 'VideoController@search'
));