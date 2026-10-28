<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
    <style>
        :root { font-family: Inter, ui-sans-serif, system-ui, sans-serif; color: #172033; background: #f6f8fb; }
        body { margin: 0; } .nav { background: #172033; padding: 1rem 7%; display: flex; gap: 1.25rem; align-items: center; }
        .nav a { color: #dbeafe; text-decoration: none; } .nav .brand { color: #fff; font-weight: 700; margin-right: auto; }
        main { max-width: 1100px; margin: 0 auto; padding: 3rem 7%; } .hero { background: #e0f2fe; border-radius: 18px; padding: 3rem; }
        .button { display: inline-block; background: #2563eb; color: #fff; padding: .7rem 1rem; border-radius: 8px; text-decoration: none; margin: .25rem .5rem .25rem 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 12px; overflow: hidden; } th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #e5e7eb; } th { background: #eff6ff; }
        .muted { color: #64748b; } .card { background: #fff; border-radius: 12px; padding: 1rem 1.25rem; margin: .75rem 0; display: flex; justify-content: space-between; align-items: center; } .badge { background: #fef3c7; color: #92400e; padding: .35rem .65rem; border-radius: 999px; font-size: .85rem; } .badge.done { background: #dcfce7; color: #166534; }
    </style>
</head>
<body>
    <nav class="nav"><a class="brand" href="{{ route('home') }}">Tasks for Today</a><a href="{{ route('home') }}">Today</a><a href="{{ route('tasks.index') }}">Task List</a><a href="{{ route('profile') }}">Profile</a><a href="{{ route('about') }}">About</a></nav>
    <main>@yield('content')</main>
</body>
</html>
