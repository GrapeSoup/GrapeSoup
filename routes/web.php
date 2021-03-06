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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('User')->middleware(['auth'])->prefix('user')->group(function () {
	Route::get('profile', 'ProfileController@index')->name('user.profile');
	Route::post('profile', 'ProfileController@update')->name('user.profile');
});

Route::post('/user/post', 'PostController@storePost')->name('post');