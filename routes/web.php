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

//Route::get('/task','TasksController@index');
//Route::get('/task/{task}','TasksController@show');
//Route::get('/task/create','TasksController@create');
//Route::get('/task/{task}/update','TasksController@update');
//Route::get('/task/{task}/edit','TasksController@edit');
//Route::post('/task', 'TasksController@store');
//Route::delete('/task/{task}/delete', 'TasksController@destroy');
// On Terminal:
// controller => PostsController
// migration => Create_posts_table
// Eloquent model => Post
//OR
// php artisan make:model Post -mc


/*
Route::get('/task', function () {

   // $tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('task.index', compact('tasks'));
});

Route::get('/task/{task}', function($id){

    //$task = DB::table('tasks')->find($id);

    //$task = App\Task::find($id);

    // type "use App\Task;" at the top => import the Task class
    // directly use "$task = Task::find($id)";


    $task = Task::find($id);
    return view('task/show', compact('task'));
});
*/


// task page from professor

//php artisan make:model Task -m
Route::post('/task', 'TasksController@store');
Route::get('/task','TasksController@index');
Route::get('/task/create', 'TasksController@create');
//php artisan make:controller TasksController -r  <-makes resourcefull controller
Route::patch('/task/{task}/edit', 'TasksController@edit');
Route::delete('/task/{task}/delete', 'TasksController@destroy');
Route::get('/task/{task}', 'TasksController@show');


