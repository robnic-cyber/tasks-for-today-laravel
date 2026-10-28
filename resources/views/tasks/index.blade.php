@extends('layouts.app')

@section('content')
<h1>Task List</h1><p class="muted">All tasks ordered by scheduled date.</p>
<table><thead><tr><th>Title</th><th>Status</th><th>Date</th></tr></thead><tbody>
@forelse ($tasks as $task)
    <tr><td>{{ $task->title }}</td><td>{{ ucfirst($task->status) }}</td><td>{{ $task->task_date->format('F j, Y') }}</td></tr>
@empty
    <tr><td colspan="3">No tasks found.</td></tr>
@endforelse
</tbody></table>
@endsection
