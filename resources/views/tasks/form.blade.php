<form method="POST" action="{{ $formAction }}" class="panel">
    @csrf
    @if ($formMethod !== 'POST') @method($formMethod) @endif

    <label for="title">Title</label>
    <input id="title" name="title" value="{{ old('title', $task->title) }}" maxlength="150" required>

    <label for="description">Description</label>
    <textarea id="description" name="description" maxlength="2000">{{ old('description', $task->description) }}</textarea>

    <label for="status">Status</label>
    <select id="status" name="status" required>
        <option value="pending" @selected(old('status', $task->status ?: 'pending') === 'pending')>Pending</option>
        <option value="done" @selected(old('status', $task->status) === 'done')>Done</option>
    </select>

    <label for="task_date">Task date</label>
    <input id="task_date" name="task_date" type="date" value="{{ old('task_date', optional($task->task_date)->format('Y-m-d')) }}" required>

    <p><button class="button" type="submit">{{ $submitLabel }}</button><a class="button secondary" href="{{ route('tasks.index') }}">Cancel</a></p>
</form>
