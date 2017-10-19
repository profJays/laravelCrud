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

//Routes for Blog
Route::get('/', 'BlogController@index')->name('landingpage');

//Route::get('/newpost', 'PostController@createpost')->name('newpostform');
Route::post('/create', 'PostController@handleNewPost')->name('handleNewPost');

Route::get('/category/{post_slug}', 'PostController@viewpost')->name('postview');
Route::get('/edit/{post_slug}', 'PostController@editpost')->name('postedit');
Route::post('/update/{post_slug}', 'PostController@handleEditPost')->name('handleEditPost');
Route::get('/delete/{post_slug}', 'PostController@deletepost')->name('postdelete');