# laravel-crud-app

Create PHP Laravel 8 CRUD web application with MySQL Database.

[Create PHP Laravel 8/7 CRUD Web App with MySQL Database](https://www.positronx.io/php-laravel-crud-operations-mysql-tutorial/)

## Run with Laravel sail

To run with Laravel sail, run the following comamnd:

```bash
cp .env.example .env
./vendor/bin/sail -f docker-compose-dev-sail.yml up
```

Then hit `http://localhost/students` on your favorite browser to see if the app is working.

## Run with plain docker compose

To run the Laravel application in a production like way, please execute the following command:

```
docker-compose up
```

The go to `http://localhost/students` to view the output.
