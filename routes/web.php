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

Route::get('/', 'AlbumController@index')->name('album.index');
Route::get('/albums/create', 'AlbumController@create')->name('album.create');
Route::get('/albums/{id}', 'AlbumController@show')->name('album.show');
Route::post('/albums/store', 'AlbumController@store')->name('albums.store');

Route::get('/photos/create/{id}', 'PhotosController@create')->name('photos.create');
Route::post('/photos/store', 'PhotosController@store')->name('photos.store');
