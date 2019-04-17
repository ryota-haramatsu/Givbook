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
Auth::routes();

Route::get('/', 'TopPagesController@index');
// Socialite
// Route::get('/auth/signin', 'Auth\SocialLiteController@signin');
// Route::get('/auth/login', 'Auth\SocialLiteController@login');
// Route::get('/auth/callback', 'Auth\SocialLiteController@callback');

Route::resource('books','BooksController');
Route::resource('users','UsersController')->only(['show']);

Route::get('chat','ChatController@chat');
Route::post('send','ChatController@send');






