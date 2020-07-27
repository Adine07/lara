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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/article', 'ArticlesController@index');
Route::get('/article/show', 'ArticlesController@show');
Route::get('/article/create', 'ArticlesController@create');
Route::post('/article/store', 'ArticlesController@store');
Route::get('/article/edit/{id}', 'ArticlesController@edit');
Route::put('/article/update/{id}', 'ArticlesController@update');
Route::delete('/article/delete/{id}', 'ArticlesController@destroy');

Route::get('/category', 'CategoryController@index');
Route::get('/category/show', 'CategoryController@show');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::delete('/category/delete/{id}', 'CategoryController@destroy');
