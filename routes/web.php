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

Route::get('/users','UserListController@show')->middleware('auth');

Route::get('/adduser/{id}/','UserListController@add')->middleware('auth');

Route::get('/account','UserListController@account')->middleware('auth')->name('account');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/friends','FriendController@index')->middleware('auth');

Route::get('/chat','ChatController@index')->middleware('auth')->name('chat.index');

Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');

Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');

Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');

Route::post('/updateaccount',[
    'uses' => 'UserListController@SaveAccount',
    'as' => 'account.save'
]);
Route::get('/userimage/{filename}',[
    'uses' => 'UserListController@getUserImage',
    'as' => 'account.image'
]);


