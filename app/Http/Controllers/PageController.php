<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function home()
    {
        $tasks = Task::query()->whereDate('task_date', Carbon::today())->orderBy('id')->get();

        return view('home', compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }
}
