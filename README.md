# Tasks for Today Management System

This Laravel application implements the assessment requirements: Eloquent task CRUD, validated forms, Laravel Breeze authentication, soft deletion through `is_archived`, and an email notification when a task changes from pending to done.

## Features

- Public Welcome, Task List, Profile, and About pages.
- Breeze registration, login, logout, password reset, and profile management.
- Authenticated users can create, edit, and archive tasks.
- Form validation for title, description, status, and task date.
- Archived tasks remain in the database and are excluded from active lists.
- A `TaskCompleted` Mailable is generated once when a task changes to `done`.
- The default `log` mail driver writes the generated email to `storage/logs/laravel.log`.

## Setup

Requirements: PHP 8.2+, Composer, Node.js/npm, and SQLite or another Laravel-supported database.

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000`. The seeded test account is:

- Email: `alex.student@example.com`
- Password: `password`

Change the password before using this outside a classroom demonstration.

## Mail configuration

The safe default is:

```dotenv
MAIL_MAILER=log
TASK_NOTIFICATION_RECIPIENT=instructor@example.com
```

After marking a pending task as done, inspect `storage/logs/laravel.log`. Updating the same task while it is already done does not generate another completion email.

For a test SMTP service, replace the `MAIL_*` values in `.env` and keep the recipient address configured through `TASK_NOTIFICATION_RECIPIENT`.

## Routes

Public: `/`, `/tasks`, `/profile`, `/about`, `/login`, `/register`.

Authenticated management: `/tasks/create`, `POST /tasks`, `/tasks/{task}/edit`, `PUT /tasks/{task}`, and `DELETE /tasks/{task}`.

## Database files

The database schema is represented by migrations in `database/migrations/`, and demonstration data is in `database/seeders/DatabaseSeeder.php`.
