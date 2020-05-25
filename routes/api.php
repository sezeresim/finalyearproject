<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('home', 'Api\HomeController@show');
Route::post('/home/{questionarea}','Api\HomeController@likeButton');

Route::get('/surveys/{questionarea}','SurveyController@showQA');
Route::post('/surveys/{questionarea}','SurveyController@store');

//Login
Route::prefix('auth')->group(function () {
  Route::post('login', 'Api\AuthController@login');
  Route::post('register', 'Api\AuthController@register');
  Route::group(['middleware' => 'auth:api'], function () {
    Route::post('getUser', 'Api\AuthController@getUser');
  });
});
//Personal
Route::get('/personal/{id}','Api\PersonalController@show');


