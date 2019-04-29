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
// Socialite
// Route::get('/auth/signin', 'Auth\SocialLiteController@signin');
// Route::get('/auth/login', 'Auth\SocialLiteController@login');
// Route::get('/auth/callback', 'Auth\SocialLiteController@callback');


Route::get('/', 'TopPagesController@index');
Route::resource('books','BooksController')->middleware('auth');
Route::resource('users','UsersController')->middleware('auth')->only(['show']);
Route::resource('messages','MessageController')->middleware('auth');
Auth::routes();




