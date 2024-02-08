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
php artisan db:seed --class=BusesTableSeeder
php artisan db:seed --class=BusRoutesTableSeeder
php artisan db:seed --class=BusSchedulesTableSeeder
php artisan db:seed --class=DriversTableSeeder
php artisan db:seed --class=TicketsTableSeeder
php artisan db:seed --class=TransactionsTableSeeder
php artisan db:seed --class=UsersTableSeeder

