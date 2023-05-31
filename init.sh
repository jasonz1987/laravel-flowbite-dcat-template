#!/bin/sh


composer install
npm install
cp .env.example .env
php artisan key:generate
npm install
php artisan migrate
php artisan db:seed --class=MenuSeeder

npm run dev && php artisan serve
