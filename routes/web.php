<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Controller@indexfun');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//For Questions
Route::get('/questionarea/create','QuestionAreaController@create');
Route::post('/questionarea','QuestionAreaController@store');
Route::get('/questionarea/{questionarea}','QuestionAreaController@show');

Route::get('/questions/{questionarea}/question/create','QuestionController@create');
Route::post('/questions/{questionarea}/question','QuestionController@store');
Route::delete('/questions/{questionarea}/question/{question}','QuestionController@destroy');


Route::get('/surveys/{questionarea}-{slug}','SurveyController@show');
Route::post('/surveys/{questionarea}-{slug}','SurveyController@store');
