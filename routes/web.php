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
Route::get('/index', 'TaskManagementController@index')->name('index');
Route::get('/create', 'TaskManagementController@create')->name('create');
Route::post('/add', 'TaskManagementController@add')->name('add');
Route::get('/show/{id}', 'TaskManagementController@show')->name('show');
Route::get('/delete/{id}', 'TaskManagementController@delete')->name('delete');
Route::get('/edit/{id}', 'TaskManagementController@edit')->name('edit');