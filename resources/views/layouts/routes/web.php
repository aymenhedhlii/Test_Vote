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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');



Route::group(
[
    'prefix' => 'questions',
], function () {

    Route::get('/', 'QuestionsController@index')
         ->name('questions.question.index');

         Route::get('/repondre', 'QuestionsController@repondre')
         ->name('questions.question.repondre');

    Route::get('/create','QuestionsController@create')
         ->name('questions.question.create');

    Route::get('/show/{question}','QuestionsController@show')
         ->name('questions.question.show')
         ->where('id', '[0-9]+');

    Route::get('/{question}/edit','QuestionsController@edit')
         ->name('questions.question.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'QuestionsController@store')
         ->name('questions.question.store');
               
    Route::put('question/{question}', 'QuestionsController@update')
         ->name('questions.question.update')
         ->where('id', '[0-9]+');

    Route::delete('/question/{question}','QuestionsController@destroy')
         ->name('questions.question.destroy')
         ->where('id', '[0-9]+');

});


Route::group(
[
    'prefix' => 'reponses',
], function () {

    Route::get('/', 'ReponsesController@index')
         ->name('reponses.reponse.index');

    Route::get('/create','ReponsesController@create')
         ->name('reponses.reponse.create');

    Route::get('/show/{reponse}','ReponsesController@show')
         ->name('reponses.reponse.show')
         ->where('id', '[0-9]+');

    Route::get('/{reponse}/edit','ReponsesController@edit')
         ->name('reponses.reponse.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ReponsesController@store')
         ->name('reponses.reponse.store');
               
    Route::put('reponse/{reponse}', 'ReponsesController@update')
         ->name('reponses.reponse.update')
         ->where('id', '[0-9]+');

    Route::delete('/reponse/{reponse}','ReponsesController@destroy')
         ->name('reponses.reponse.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'reponse_abonnes',
], function () {

    Route::get('/', 'ReponseAbonnesController@index')
         ->name('reponse_abonnes.reponse_abonnes.index');

    Route::get('/create','ReponseAbonnesController@create')
         ->name('reponse_abonnes.reponse_abonnes.create');

    Route::get('/show/{reponseAbonnes}','ReponseAbonnesController@show')
         ->name('reponse_abonnes.reponse_abonnes.show')
         ->where('id', '[0-9]+');

    Route::get('/{reponseAbonnes}/edit','ReponseAbonnesController@edit')
         ->name('reponse_abonnes.reponse_abonnes.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ReponseAbonnesController@store')
         ->name('reponse_abonnes.reponse_abonnes.store');
               
    Route::put('reponse_abonnes/{reponseAbonnes}', 'ReponseAbonnesController@update')
         ->name('reponse_abonnes.reponse_abonnes.update')
         ->where('id', '[0-9]+');

    Route::delete('/reponse_abonnes/{reponseAbonnes}','ReponseAbonnesController@destroy')
         ->name('reponse_abonnes.reponse_abonnes.destroy')
         ->where('id', '[0-9]+');

});
