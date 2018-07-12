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
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/index', 'PostController@index')->name('post.index');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::patch('post/{id}/update', 'PostController@update')->name('post.update');
Route::delete('post/{id}/delete', 'PostController@destroy')->name('post.destroy');
Route::get('post/{id}/show', 'PostController@show')->name('post.show');
