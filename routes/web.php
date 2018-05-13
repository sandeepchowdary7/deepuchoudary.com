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

Route::get('/', 'PostsController@index')->name('posts.index');
Route::get('/talks', 'TalksController@index')->name('talks.index');
Route::get('/open-source', 'ProjectsController@index')->name('projects.index');

Route::get('/newsletter', 'NewsletterSubscribersController@create')->name('newsletter-subscribers.create');
Route::post('/newsletter', 'NewsletterSubscribersController@store')->name('newsletter-subscribers.store');

Route::view('about', 'about')->name('about');

