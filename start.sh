echo :::::::::::::::: Project Pull :::::::::::::::::
git pull

echo :::::::::::::: Starting Frontend ::::::::::::::
npm install
npm run build

echo :::::::::::::: Starting Backend :::::::::::::::
"C:\xampp\php\php.exe" "C:\ProgramData\ComposerSetup\bin\composer.phar" install
cp ./.env.example ./.env

"C:\xampp\php\php.exe" artisan key:generate
#"C:\xampp\php\php.exe" artisan jwt:secret
"C:\xampp\php\php.exe" artisan storage:link
"C:\xampp\php\php.exe" artisan serve