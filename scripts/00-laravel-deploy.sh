#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Running seeders"
php artisan db:seed --class=BusesTableSeeder --force
php artisan db:seed --class=BusRoutesTableSeeder --force
php artisan db:seed --class=BusSchedulesTableSeeder --force
php artisan db:seed --class=DriversTableSeeder --force
php artisan db:seed --class=TicketsTableSeeder --force
php artisan db:seed --class=TransactionsTableSeeder --force
php artisan db:seed --class=UsersTableSeeder --force

