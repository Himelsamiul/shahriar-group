#!/usr/bin/env bash
# Hostinger auto-deploy: runs on the server after every push to main.
set -e

APP=~/domains/shahriargroup.com/laravel
DOCROOT=~/domains/shahriargroup.com/public_html

cd "$APP"
git pull origin main
composer install --no-dev --optimize-autoloader --no-interaction
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
# sync public assets to docroot (never deletes manually uploaded files like images)
cp -rf "$APP"/public/. "$DOCROOT"/

echo "Deploy finished: $(date)"
