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

//Route::get('admin/home', 'AdminController@index');
Route::get('/admin/account', 'AdminController@index')->name('account.admin');
Route::get('/admin/login', 'AdminController@login')->name('login.admin');
Route::post('admin/account', 'AdminController@create');
Route::post('/admin/check', 'AdminController@check_user');
Route::get('/admin/welcome', 'AdminController@protect');
Route::get('/logout', 'AdminController@logout');
Route::get('organizations/create', 'OrganizationController@create');
Route::post('/organizations', 'OrganizationController@store');
Route::get('/organizations/{organization}', 'OrganizationController@show');
Route::get('/organizations/{organization}/subjects/createTwo', 'SubjectController@createTwo');
Route::post('/organizations/{organization}/subjects', 'SubjectController@storeTwo');
Route::get('/affichage', 'OrganizationController@index')->name('organization.index');
Route::get('/organization/edit/{id}', 'OrganizationController@edit')->name('organization.edit');
Route::get('/organization/delete/{id}', 'OrganizationController@destroy')->name('organization.delete');

Route::post('/organization/update/{id}', 'OrganizationController@update')->name('organization.update');
Route::get('/subjects', 'SubjectController@index')->name('subject.index');
Route::get('/subject/edit/{id}', 'SubjectController@edit')->name('subject.edit');
Route::post('/subject/update/{id}', 'SubjectController@update')->name('subject.update');
Route::get('/subject/delete/{id}', 'SubjectController@destroy')->name('subject.delete');
Route::get('/subjects/{subject}', 'SubjectController@show');
Route::get('/subjects/{subject}/dimensions/create', 'DimensionController@create');
Route::post('/subjects/{subject}/dimensions', 'DimensionController@store');
Route::get('/dimensions/{dimension}', 'DimensionController@show');
Route::get('/dimensions/{dimension}/subdimensions/create', 'SubdimensionController@create');
Route::post('/dimensions/{dimension}/subdimensions', 'SubdimensionController@store');
Route::get('/subdimensions/{subdimension}', 'SubdimensionController@show');
Route::get('subdimensions/{subdimension}/criterions/create', 'CriterionController@create');
Route::post('/subdimensions/{subdimension}/criterions', 'CriterionController@store');


Route::get('/surveys/{subdimension}-{slug}', 'SurveyController@show');
Route::post('/surveys/{subdimension}-{slug}', 'SurveyController@store');

