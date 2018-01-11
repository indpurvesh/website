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


Auth::routes();

Route::get('/user-activate-view', 'Auth\RegisterController@activateView')->name('user.activate.view');
Route::get('/user-activation', 'Auth\RegisterController@activate')->name('user.activation');


Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('/forum', ['as' => 'forum.index','uses' => 'ForumController@index']);

Route::resource('/issue','IssueController');



Route::resource('/category','CategoryController');
Route::resource('/forum/{category}/post','PostController',['as' => 'forum']);

Route::get('/forum/{category}/post/{slug}/like',['uses' => 'PostController@likePost', 'as' => 'forum.post.like']);
Route::get('/forum/{category}/post/{slug}/dislike',['uses' => 'PostController@dislikePost', 'as' => 'forum.post.dislike']);

Route::get('/documentations', ['as' => 'docs.index','uses' => 'DocController@index']);


Route::get('/documentations/{viewName?}', ['as' => 'docs.index','uses' => 'DocController@index']);