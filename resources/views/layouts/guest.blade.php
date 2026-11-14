<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Tasks for Today') }}</title>
    <style>
        :root { font-family: Inter, ui-sans-serif, system-ui, sans-serif; color: #172033; background: #eef6ff; }
        * { box-sizing: border-box; } body { margin: 0; } a { color: #1d4ed8; }
        .shell { width: min(460px, calc(100% - 2rem)); margin: 5rem auto; } .brand { display: block; text-align: center; color: #172033; font-size: 1.5rem; font-weight: 700; text-decoration: none; margin-bottom: 1rem; }
        .panel { background: #fff; border-radius: 14px; padding: 1.75rem; box-shadow: 0 5px 20px #17203320; } label { display: block; font-weight: 600; margin: 1rem 0 .35rem; } input { width: 100%; border: 1px solid #cbd5e1; border-radius: 8px; padding: .7rem; font: inherit; } button { background: #2563eb; color: #fff; border: 0; border-radius: 8px; padding: .7rem 1rem; cursor: pointer; font: inherit; } .row { display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-top: 1.25rem; } .error { color: #991b1b; margin: .25rem 0; font-size: .9rem; } .status { color: #166534; margin-bottom: 1rem; }
    </style>
</head>
<body><div class="shell"><a class="brand" href="{{ route('home') }}">Tasks for Today</a><div class="panel">{{ $slot }}</div></div></body>
</html>
