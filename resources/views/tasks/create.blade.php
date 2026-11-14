@extends('layouts.app')

@section('content')
<h1>Create Task</h1>
@include('tasks.form', ['formAction' => route('tasks.store'), 'formMethod' => 'POST', 'submitLabel' => 'Create task'])
@endsection
