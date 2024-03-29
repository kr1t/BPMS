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

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::resource('nurse/patients', 'Nurse\\PatientsController');
Route::get('patients', 'PatientsController@show');
Route::resource('tasks', 'TasksController');
Route::resource('checks', 'Check\\ChecksController');
Route::resource('nurse-check', 'NurseCheck\\NurseChecksController');