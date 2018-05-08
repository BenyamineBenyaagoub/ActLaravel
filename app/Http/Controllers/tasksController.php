<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class tasksController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks.task', compact('tasks'));
    }

    public function show(Task $task){

        

        return view('tasks.show', compact('task'));
    }
}
