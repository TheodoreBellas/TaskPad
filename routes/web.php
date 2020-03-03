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
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('projects.')->prefix('projects')->middleware('auth')->group(function () {
    Route::get('/', 'ProjectController@index')->name('index');
    Route::get('/{project}', 'ProjectController@show')->name('show');
});

Route::name('task-logs.')->prefix('task-logs')->middleware('auth')->group(function () {
    Route::post('/', 'TaskLogController@store')->name('create');
});
