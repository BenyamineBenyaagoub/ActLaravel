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






Route::get('/tasks', 'tasksController@index');


Route::get('/tasks/{task}', 'tasksController@show');

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');








Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');




Route::get('/logout', 'SessionsController@destroy');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');
