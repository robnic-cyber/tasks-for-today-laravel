<?php

namespace App\Http\Controllers;

use App\Mail\TaskCompleted;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::query()
            ->where('is_archived', false)
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create(): View
    {
        return view('tasks.create', ['task' => new Task(['status' => 'pending'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        Task::query()->create($this->validatedData($request));

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task): View
    {
        abort_if($task->is_archived, 404);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task): RedirectResponse
    {
        abort_if($task->is_archived, 404);

        $validated = $this->validatedData($request);
        $becameDone = $task->status !== 'done' && $validated['status'] === 'done';

        $task->update($validated);

        if ($becameDone) {
            Mail::to(config('mail.task_recipient'))->send(new TaskCompleted($task->fresh()));
        }

        return redirect()->route('tasks.index')->with(
            'success',
            $becameDone ? 'Task updated and completion email generated.' : 'Task updated successfully.'
        );
    }

    public function destroy(Task $task): RedirectResponse
    {
        abort_if($task->is_archived, 404);

        $task->update(['is_archived' => true]);

        return redirect()->route('tasks.index')->with('success', 'Task archived successfully.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string', 'max:2000'],
            'status' => ['required', 'in:pending,done'],
            'task_date' => ['required', 'date'],
        ]);
    }
}
