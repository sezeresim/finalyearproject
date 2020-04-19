<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Static Pages
Route::get('/about','StaticPageController@about');
Route::get('/career','StaticPageController@career');
Route::get('/contact','StaticPageController@contact');
Route::get('/references','StaticPageController@references');
Route::get('/team','StaticPageController@team');

//Public
Route::get('/','Controller@indexfun');
Route::get('/public','Controller@showPublic');
Route::post('/public/{questionarea}','Controller@ajaxRequest');

//Auth Routes
Auth::routes();

//Profile
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


//Personal
Route::get('/personal','PersonalController@show');