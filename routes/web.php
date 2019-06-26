<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/posts','WelcomeController@getPosts');
Route::get('/','WelcomeController@index');
Route::get('/comment','CommentController@getComments');
Route::get('/form','FormController@index');
Route::post('/post','FormController@store')->name('post.add');
Route::get('/form-movie','FormMovieController@index');
Route::post('/movie','FormMovieController@store')->name('movie.add');
Route::get('/movie','MovieController@getMovies');
Route::get('/movie/{id}','MovieController@edit')->name('movie.edit');
Route::patch('/movie/{id}','MovieController@update')->name('movie.update');
Route::Delete('/movie/{id}','MovieController@delete')->name('movie.delete');