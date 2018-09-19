<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/test1', function (){
//    return response()->json([
//        'dayo'
//    ]);
//});

Route::resource('/test', 'FinderController');
Route::get('test/{id}', 'FinderController@show');
Route::delete('tester/{id}', 'FinderController@destroy');