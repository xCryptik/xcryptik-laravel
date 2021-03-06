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

Route::get('/home', 'HomeController@index')->name('home');

//routes/web.php
//route for training module
//Route::get('/trainings', 'TrainingController@index')->name('training:index');
//Route::get('/trainings/create', 'TrainingController@create')->name('training:create');
//Route::post('/trainings/create', 'TrainingController@store')->name('training:store');


//group routing
//
Route::group([
    'middleware' => 'auth',
    'prefix' => 'trainings',
    'as' =>'trainings',
],function(){
    Route::get('/', 'TrainingController@index')->name('training:index');
    Route::get('/trainings/create', 'TrainingController@create')->name('training:create');
    Route::post('/trainings/create', 'TrainingController@store')->name('training:store');
});