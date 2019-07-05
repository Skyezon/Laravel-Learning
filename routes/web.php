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

Route::get('/bioskop','BioskopController@getBioskop');
Route::Delete('/bioskop/{id}','BioskopController@delete')->name('bioskop.delete');
Route::get('/bioskop/{id}','BioskopController@edit')->name('bioskop.edit');
Route::get('/bioskop/form','FormBioskopController@Index');
// Route::patch('/bioskop/form-update','FormBioskopController@update');
Route::post('/bioskop/form','FormBioskopController@store')->name('bioskop.add');


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
Route::post('/comment','CommentController@store')->name('comment.add');
Route::get('/movie/show/{id}','MovieController@show')->name('movie.show');

