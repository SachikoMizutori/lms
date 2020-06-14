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



Route::get('/', 'HomeController@index');
Route::get('index', 'ArticleController@index');
Route::get('create', 'ArticleController@create');
Route::post('create', 'ArticleController@store');
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('edit', 'ArticleController@update');
Route::get('delete/{id}', 'ArticleController@show');
Route::post('delete', 'ArticleController@delete');

Route::get('delete/{id}', 'CommentController@index');
Route::get('delete/{id}', 'CommentController@create');
Route::post('delete/{id}', 'CommentController@store');
Route::post('delete/{id}', 'CommentController@show');
Route::post('delete/{id}', 'CommentController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
