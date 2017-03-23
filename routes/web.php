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

Route::get('/home', 'HomeController@index');

Route::get('blogs', 'BlogsController@form');
Route::get('/creates', 'BlogsController@create');
Route::post('/post-blog', 'BlogsController@postBlog');
Route::get('/edit/{id}', 'BlogsController@editBlog');
Route::post('/save-blog', 'BlogsController@saveEdit');
Route::get('/delete/{id}', 'BlogsController@deleteBlog');

