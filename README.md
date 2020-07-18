# ShortLink service

Custom url shortener service.

![screenshot_1](screenshots/screen.jpg)

## Install
cd project
`composer install` (see folder **vendor**)

cd project
`npm install` (see folder **node_modules**)

clone `.env.example` and rename to `.env`

Generate APP_KEY
`php artisan key:generate`

## Connection to DataBase `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shortlink
DB_USERNAME=root
DB_PASSWORD=
```

## Running Migrations
`php artisan migrate`