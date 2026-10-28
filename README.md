# Tasks for Today Management System

This project rebuilds the TSA1 task-management application in Laravel using migrations, a database seeder, Eloquent models, controllers, and Blade views.

## Pages

- `/` — Welcome page showing only tasks scheduled for today
- `/tasks` — complete task list ordered by task date
- `/profile` — the single seeded user profile
- `/about` — static developer and application information

## Requirements

- PHP 8.2+
- Composer
- SQLite or another Laravel-supported database

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. The seeder creates eight tasks across four dates, including today's date, and exactly one user record.

## MVC and Eloquent implementation

- `Task` and `User` are Eloquent models.
- `PageController@home` filters tasks with `whereDate('task_date', today())`.
- `TaskController@index` retrieves all tasks ordered by date.
- `ProfileController@show` retrieves the single user with Eloquent.
- Blade views render the records from the shared controllers.
