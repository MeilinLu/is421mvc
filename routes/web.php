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


use App\Task;

Route::get('/',function(){
    return  view('welcome');
});

//php artisan make:model Task -m
Route::post('/task', 'TasksController@store');
Route::get('/task','TasksController@index');
Route::get('/task/create', 'TasksController@create');
//php artisan make:controller TasksController -r  <-makes resource full controller
Route::get('/task/{task}/edit', 'TasksController@edit');
Route::patch('/task/{task}/edit', 'TasksController@update');
Route::delete('/task/{task}/delete', 'TasksController@delete');
Route::get('/task/{task}', 'TasksController@show');

Route::post('/task/{task}/comments', 'CommentsController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
