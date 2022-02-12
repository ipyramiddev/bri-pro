cd "$(dirname "$0")"
echo :::::::: Starting Backend and Frontend ::::::::
git pull
npm install
npm run build

composer install
COPY ./.env.example ./.env
php artisan key:generate
php artisan storage:link
php artisan serve
