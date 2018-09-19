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

//Route::get('/', function () {
//    return view('landingpage/index');
//});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/search', 'HomeController@search');
Route::get('/search/{location}', 'HomeController@getId');
//Route::get('/login', 'LoginController');
//Route::get('/register', 'RegisterController');
