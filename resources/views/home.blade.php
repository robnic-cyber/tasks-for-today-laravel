@extends('layouts.app')

@section('content')
<section class="hero"><p class="muted">{{ now()->format('l, F j, Y') }}</p><h1>Tasks for Today</h1><p>Stay organized with the tasks scheduled for today.</p></section>
<h2>Today's Tasks</h2>
@forelse ($tasks as $task)
    <article class="card"><div><strong>{{ $task->title }}</strong><p class="muted">{{ ucfirst($task->status) }}</p></div><span class="badge {{ $task->status === 'completed' ? 'done' : '' }}">{{ ucfirst($task->status) }}</span></article>
@empty
    <p class="muted">No tasks are scheduled for today.</p>
@endforelse
<a class="button" href="{{ route('tasks.index') }}">View all tasks</a>
@endsection
