<h1>Task completed</h1>

<p>The following task was marked as done:</p>

<ul>
    <li><strong>Title:</strong> {{ $task->title }}</li>
    <li><strong>Scheduled date:</strong> {{ $task->task_date->format('F j, Y') }}</li>
</ul>

@if ($task->description)
    <p><strong>Description:</strong> {{ $task->description }}</p>
@endif
