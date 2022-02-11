cd "$(dirname "$0")"

echo :::::::: Starting Backend and Frontend ::::::::
git pull
docker compose build
docker compose up -d
