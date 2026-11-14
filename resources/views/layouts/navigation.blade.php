<nav class="nav">
    <a class="brand" href="{{ route('home') }}">Tasks for Today</a>
    <a href="{{ route('home') }}">Today</a>
    <a href="{{ route('tasks.index') }}">Task List</a>
    <a href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('about') }}">About</a>
    @auth
        <a href="{{ route('tasks.create') }}">New Task</a>
        <a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit">Log out</button>
        </form>
    @else
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>
