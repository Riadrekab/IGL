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

Route::get('/home', 'PagesController@home');
Route::get('/ajouter_etudiant','PagesController@Afficheretudiant');
Route::get('/test', function () {
    return 'Un test yes';
});

