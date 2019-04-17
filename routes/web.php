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

// Route::get('books', 'BooksController@index')->name('books.index');
// Route::get('books/user/{id}', 'BooksController@show')->name('user.show');
// Route::get('books/create', 'BooksController@create');
// Route::post('books', 'BooksController@store')->name('books.store');
// Route::delete('delete/{id}', 'BooksController@destroy');
// Route::get('books/edit/{id}', 'BooksController@edit')->name('books.edit');
// Route::patch('books', 'BooksController@update')->name('books.update');

// Route::delete('users/{user}','BooksController@destroy')->name('books.destroy');
Route::resource('books','BooksController');
Route::resource('users','UsersController')->only(['show']);

Route::get('chat','ChatController@chat');
Route::post('send','ChatController@send');
// Route::get('messages', 'ChatsController@fetchMessages');
// Route::post('messages', 'ChatsController@sendMessage');


Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
