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


Route::get('/consulter_absences{mat}', 'AbsencesController@index')->name('etudiant.consulterabsences');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products/{id}', 'ProductController@show');
Route::post('/ajouter_etudiant','PagesController@postInfos');
Route::post('/login', 'Auth\LoginController@login');
//Route::post('/consulter_absences', 'AbsencesController@setMatricule');
