#!/bin/sh

########################################################
# Bash script to install HeavyGari Laravel App
# Written by Talha Ibne Imam
########################################################
echo -e "${HC}::::::::::::::::::::::::::Backend Laravel Installation::::::::::::::::::::::::::${NC}"
echo -e "${HC}::::::::::::::::::::::::::Composer Install::::::::::::::::::::::::::${NC}"
composer install --optimize-autoloader

cp .env.example .env
php artisan key:generate
php artisan jwt:secret

echo -e "${HC}::::::::::::::::::::::::::Frontend Vue.JS Installation::::::::::::::::::::::::::${NC}"
npm install

npm run build

echo -e "${HC}::::::::::::::::::::::::::Creating Storage Directory::::::::::::::::::::::::::${NC}"
php artisan storage:link

php artisan serve