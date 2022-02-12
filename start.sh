cd "$(dirname "$0")"

echo :::::::::::::::: Project Pull :::::::::::::::::
git pull

echo :::::::::::::: Starting Frontend ::::::::::::::
npm install
npm run build

echo :::::::::::::: Starting Backend :::::::::::::::
#composer install
#cp ./.env.example ./.env

#php artisan key:generate --ansi
#php artisan jwt:secret

#php artisan storage:link

#php artisan serve

docker-compose build