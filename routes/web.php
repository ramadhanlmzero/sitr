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

Route::get('/', 'WebController@index')->name('index');
Route::get('/berita/{id}', 'WebController@news')->name('news');
Route::get('/demografi', 'WebController@demographic')->name('demographic');
Route::get('/peta', 'WebController@maps')->name('maps');
Route::get('/potensidesa', 'WebController@potential')->name('potential');
