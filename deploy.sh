#!/usr/bin/env bash
# Hostinger auto-deploy: runs on the server after every push to main.
set -e

APP=~/domains/shahriargroup.com/laravel
DOCROOT=~/domains/shahriargroup.com/public_html

cd "$APP"
git pull origin main
# Hostinger CLI PHP disables proc_open, so composer's post-install scripts
# cannot run; skip them and run package discovery through artisan instead.
composer install --no-dev --optimize-autoloader --no-scripts --no-interaction
php artisan package:discover
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
# sync public assets to docroot (never deletes manually uploaded files like images)
cp -rf "$APP"/public/. "$DOCROOT"/

# the docroot copy of index.php must reach the app one level up in laravel/
# (the repo copy keeps ../ paths so local `php artisan serve` still works)
sed -i \
  -e "s|__DIR__.'\.\./vendor/autoload.php'|__DIR__.'\.\./laravel/vendor/autoload.php'|" \
  -e "s|__DIR__.'\.\./bootstrap/app.php'|__DIR__.'\.\./laravel/bootstrap/app.php'|" \
  -e "s|__DIR__.'\.\./storage/framework/maintenance.php'|__DIR__.'\.\./laravel/storage/framework/maintenance.php'|" \
  "$DOCROOT/index.php"

echo "Deploy finished: $(date)"
