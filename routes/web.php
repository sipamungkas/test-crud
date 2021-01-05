<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ProductController@index')->name('index');
Route::get('/create','ProductController@create')->name('create');
Route::post('/','ProductController@store')->name('store');
Route::get('/{id}/show','ProductController@show')->name('show');
Route::get('/{id}/edit','ProductController@edit')->name('edit');
Route::put('/{id}/update','ProductController@update')->name('update');
Route::delete('/{id}','ProductController@destroy')->name('delete');