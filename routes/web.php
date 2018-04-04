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

Route::get('/', function () {
    return view('welcome');
});



//variables

Route::get('/name',function (){
    return view('variables.variables',["name"=>"reza"]);
});
Route::get('/name1',function (){
    return view('variables.variables')->with('name','reza');
});
Route::get('/name2',function (){
    $name="reza";
    $age=18;
    return view('variables.variables',compact('name','age'));
});
Route::get('/tasks',function (){
    $tasks=['work1','work2','work3'];

    return view('variables.tasks',compact('tasks'));
});
Route::get('/tasksDB/{id}','TasksController@showTask')->name('tasks');
Route::get('/tasksDB','TasksController@showAllTasks');

//laravel active record elequent