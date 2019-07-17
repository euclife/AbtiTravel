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

Route::get('/', 'GuestController@index')->name('index');

Auth::routes(['verify' => true]);
Route::get('login/google/setPassword', 'GuestController@formPassword')->middleware('auth');
Route::post('login/google/setPassword', 'GuestController@updatePassword')->middleware('auth');
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


//pages
Route::get('tour/{id}', 'GuestController@pageTour');
Route::get('tour', 'GuestController@tour');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/book', 'GuestController@book')->middleware('auth');
