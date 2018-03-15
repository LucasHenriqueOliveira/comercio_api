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

Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@store');
Route::put('product/{id}', 'ProductController@update');
Route::put('product/active/{id}', 'ProductController@active');
Route::put('product/remove/{id}', 'ProductController@remove');

Route::get('category', 'CategoryController@index');
Route::get('category/{id}', 'CategoryController@show');
Route::post('category', 'CategoryController@store');
Route::put('category/{id}', 'CategoryController@update');
Route::put('category/active/{id}', 'CategoryController@active');
Route::put('category/remove/{id}', 'CategoryController@remove');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

