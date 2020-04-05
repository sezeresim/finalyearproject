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
Route::post('/{questionarea}','QuestionAreaController@ajaxRequest');

Route::get('/home', 'HomeController@index')->name('home');

//My Test
Route::get('/mytests','MyTestsController@index');
Route::delete('/mytests/{questionarea}','MyTestsController@destroy');

//Detail
Route::get('/mytests/analysis/{questionarea}','DetailController@show');


//For Question Area
Route::get('/questionarea/create','QuestionAreaController@create');
Route::post('/questionarea/store','QuestionAreaController@store');
Route::get('/questionarea/{questionarea}','QuestionAreaController@show');

//For Edit Questions
Route::get('/questions/{questionarea}/question/create','QuestionController@create');
Route::post('/questions/{questionarea}/question','QuestionController@store');
Route::delete('/questions/{questionarea}/question/{question}','QuestionController@destroy');

//Survey and Test for public
Route::get('/surveys/{questionarea}-{slug}','SurveyController@show');
Route::post('/surveys/{questionarea}-{slug}','SurveyController@store');

//Pricing
Route::get('/pricing','PricingController@index');

//Class
Route::get('/myclass','ClassGroupController@index');
Route::get('/myclass/create','ClassGroupController@create');
Route::post('/myclass/store','ClassGroupController@store');
Route::get('/myclass/{classgroup}/list','ClassGroupController@show');
Route::delete('myclass/{classgroup}/delete','ClassGroupController@destroy');

//ClassList
Route::post('/myclass/{classgroup}/list/add','ClassListController@store');
Route::delete('/myclass/{classgroup}/list/{list}','ClassListController@destroy');
