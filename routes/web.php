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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/friends','FriendController@index')->middleware('auth');

Route::get('/chat','ChatController@index')->middleware('auth')->name('chat.index');

Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');