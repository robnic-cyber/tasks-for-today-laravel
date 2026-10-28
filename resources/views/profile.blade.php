@extends('layouts.app')

@section('content')
<h1>Profile</h1><section class="card profile-card"><h2>{{ $user->full_name }}</h2><p><strong>Username:</strong> {{ $user->username }}</p><p><strong>Email:</strong> {{ $user->email }}</p></section>
@endsection
