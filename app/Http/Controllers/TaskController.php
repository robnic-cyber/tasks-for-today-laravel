<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->orderBy('task_date')->orderBy('id')->get();

        return view('tasks.index', compact('tasks'));
    }
}
