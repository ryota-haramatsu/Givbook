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

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', 'TopPagesController@index');
Route::get('/auth/signin', 'Auth\SocialLiteController@signin');
Route::get('/auth/login', 'Auth\SocialLiteController@login');
Route::get('/auth/callback', 'Auth\SocialLiteController@callback');

Route::get('/books', 'BooksController@index');

Route::get('/books/create', 'BooksController@create');
Route::post('/books', 'BooksController@store');

Route::get('/books/{id}/edit', 'BooksController@edit');
Route::patch('/books/{id}/update', 'BooksController@update');

Route::get('/user/{id}', 'BooksController@show');