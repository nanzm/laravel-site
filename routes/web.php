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

Route::get('/', 'PostController@test');

//文章

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{id}', 'PostController@show');
Route::put('/posts/{id}', 'PostController@update');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::get('/posts/{id}/delete', 'PostController@delete');

//Route::get('/notices', 'PostController@notices');

