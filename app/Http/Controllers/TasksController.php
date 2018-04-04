<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public  function showTask(Task $id){
        //laravel query builder
        // $tasks=DB::table('tasks')->find($id);
        //$tasks=Task::find($id);
        return view('variables.tasksDBshow',['tasks'=>$id]);
        //return json
        //return $tasks;
    }

    public  function  showAllTasks(){
        //laravel query builder
        //$tasks=DB::table('tasks')->get();
        //$tasks=DB::table('tasks')->latest()->get();
        $tasks=Task::all();
        return view('variables.tasksDB',compact('tasks'));
    }
}
