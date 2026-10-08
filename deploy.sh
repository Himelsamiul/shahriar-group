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
# sync public assets to docroot, but never touch uploads/ — it's a symlink to
# the app's public/uploads where admin-uploaded branding lives
rsync -a --exclude 'uploads/' "$APP/public/" "$DOCROOT"/
# admin-uploaded branding lives in the app's public/uploads; expose it in the docroot.
# rm first: if a previous deploy left a real dir there, ln would nest a symlink inside it
mkdir -p "$APP/public/uploads"
rm -rf "$DOCROOT/uploads"
ln -s "$APP/public/uploads" "$DOCROOT/uploads"

# the docroot copy of index.php must reach the app one level up in laravel/
# (the repo copy keeps ../ paths so local `php artisan serve` still works)
sed -i "s|\.\./vendor/autoload\.php|../laravel/vendor/autoload.php|; s|\.\./bootstrap/app\.php|../laravel/bootstrap/app.php|; s|\.\./storage/framework/maintenance\.php|../laravel/storage/framework/maintenance.php|" "$DOCROOT/index.php"

echo "Deploy finished: $(date)"
