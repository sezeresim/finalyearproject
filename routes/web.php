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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//For Questions
Route::get('/questionarea/create','QuestionAreaController@create');
Route::post('/questionarea','QuestionAreaController@store');
Route::get('/questionarea/{questionarea}','QuestionAreaController@show');

Route::get('/questions/{questionArea}/question/create','QuestionController@create');
Route::post('/questions/{questionArea}/question','QuestionController@store');

Route::get('/surveys/{questionarea}-{slug}','SurveyController@show');
