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

Route::get('/','HomeController@index');
Route::post('/', 'HomeController@create')->middleware('checkforemptyfields');
Route::get('/paint-job','PaintJobController@index');
Route::get('/performance-report', 'JobsController@report');
Route::get('/jobs-report', 'JobsController@getJobs');
Route::get('/done/{id}', 'PaintJobController@done');