@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>
@include('tasks.form', ['formAction' => route('tasks.update', $task), 'formMethod' => 'PUT', 'submitLabel' => 'Save changes'])
@endsection
