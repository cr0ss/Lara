<?php


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@logged');

Route::get('/user/{id}', 'User_InfoController@show');
Route::post('/user/{id}', 'User_InfoController@update');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');
