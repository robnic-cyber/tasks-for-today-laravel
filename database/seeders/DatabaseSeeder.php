<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();

        foreach ([
            ['title' => 'Review project requirements', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Plan weekly priorities', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Update task documentation', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Prepare database migration', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Test Eloquent queries', 'status' => 'pending', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Refine Blade layout', 'status' => 'completed', 'task_date' => $today->copy()->subDays(2)],
            ['title' => 'Write project README', 'status' => 'pending', 'task_date' => $today->copy()->subDays(2)],
            ['title' => 'Review final submission', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
        ] as $task) {
            Task::query()->updateOrCreate(['title' => $task['title'], 'task_date' => $task['task_date']], $task);
        }

        User::query()->updateOrCreate(
            ['username' => 'alex.student'],
            ['full_name' => 'Alex Student', 'email' => 'alex.student@example.com'],
        );
    }
}
