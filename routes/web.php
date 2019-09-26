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
Route::get('', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('');
Route::get('survey/add', 'SurveyController@add')->name('');
Route::post('survey/add/insertSurvey', 'SurveyController@insertSurvey')->name('');
Route::get('survey/add/insertSurvey', 'SurveyController@insertSurvey')->name('');
Route::get('survey/view/{id}', 'SurveyController@viewSurvey')->name('');
Route::post('survey/submitresult', 'ResultController@submitresult')->name('');
Route::get('survey/submitresult', 'ResultController@submitresult')->name('');
Route::get('profile', 'ProfileController@index')->name('');
Route::get('profile/edit', 'ProfileController@edit')->name('');
Route::post('profile/update', 'ProfileController@update')->name('');
Route::get('profile/update', 'ProfileController@update')->name('');
Route::get('profile/survey', 'ProfileController@survey')->name('');
Route::get('survey/delete/{id}', 'ProfileController@deleteSurve')->name('');
Route::get('profile/credits', 'CreditsController@index')->name('');
Route::get('user/survey', 'SurveyUserController@userSurvey')->name('');
Route::get('user/view/{id}', 'SurveyUserController@viewSurvey')->name('');
Route::get('view/result/{id}', 'ResultController@viewReport')->name('');
Route::get('view/result-2/{id}', 'ResultController@viewReportModern')->name('');
//AdminController
Route::get('admin/researcher', 'AdminController@allReacher')->name('');
Route::get('admin/user', 'AdminController@allUser')->name('');
Route::get('admin/admin', 'AdminController@allAdmin')->name('');
Route::get('admin/surveys', 'AdminController@allSurvey')->name('');
