<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
    <style>
        :root { font-family: Inter, ui-sans-serif, system-ui, sans-serif; color: #172033; background: #f6f8fb; }
        * { box-sizing: border-box; } body { margin: 0; } a { color: #1d4ed8; } .nav { background: #172033; padding: 1rem 7%; display: flex; gap: 1.25rem; align-items: center; flex-wrap: wrap; } .nav a { color: #dbeafe; text-decoration: none; } .nav .brand { color: #fff; font-weight: 700; margin-right: auto; } .nav form { margin: 0; } .nav button { background: none; border: 0; color: #dbeafe; cursor: pointer; font: inherit; padding: 0; } main { max-width: 1100px; margin: 0 auto; padding: 3rem 7%; } .panel { background: #fff; border-radius: 14px; padding: 1.5rem; margin: 1rem 0; box-shadow: 0 5px 20px #17203310; } input { max-width: 34rem; padding: .7rem; border: 1px solid #cbd5e1; border-radius: 8px; } button { background: #2563eb; color: #fff; border: 0; border-radius: 8px; padding: .7rem 1rem; cursor: pointer; } label { display: block; font-weight: 600; margin: 1rem 0 .35rem; } .errors { color: #991b1b; } .success { color: #166534; }
    </style>
</head>
<body>@include('layouts.navigation')<main>@isset($header)<header><h1>{{ $header }}</h1></header>@endisset{{ $slot }}</main></body>
</html>
