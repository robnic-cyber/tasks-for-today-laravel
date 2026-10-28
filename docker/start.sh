#!/bin/sh
set -e

touch database/database.sqlite
php artisan migrate --force --seed
exec apache2-foreground
