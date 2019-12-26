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


//Route::get('/ajouter_etudiant','PagesController@Afficheretudiant');
//Route::get('/ajouter_etudiant','PagesController@getInfos');
//Route::post('ajouter_etudiant','PagesController@postInfos');
//Route::get('/','HomeController@index')->name('home');
//Route::get('/test', function () {
  ///  return 'Un test yes';

//Route::post('/login', 'Auth\LoginController@login');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');

