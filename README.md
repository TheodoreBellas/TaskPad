# TaskPad
TaskPad is a [Laravel 6](https://laravel.com)-powered application developed during the course of a job interview. See below for features, installation instructions, and more.

# Features 
- [ ] Simple user registration & authentication
- [ ] Seeders for filling the database with demo information
- [ ] Time tracking for user-created tasks

# Configuration & Usage

## Initial Configuration
```
# Clone the repository
git clone https://github.com/TheodoreBellas/CMM_TaskPad.git

# Copy over the example environment file
cd CMM_TaskPad
cp .env.example .env

# Download required composer packages
composer install
```

## Database Configuration
To run migrations, seeders, and other database interactions, you may need to update the `.env` file with your local database's information, as shown below:

```
DB_CONNECTION=mysql
DB_HOST=<Host, probably "localhost" or "127.0.0.1">
DB_PORT=<MySQL port, probably 3306>
DB_DATABASE=<MySQL database the application uses, probably "laravel">
DB_USERNAME=<MySQL user>
DB_PASSWORD=<MySQL user password>
```

## Migrations & Seeding
To run the initial migrations and create/seed the database tables, you can run:
```
php artisan migrate --seed
```
from the project's root directory. 

If you want to re-set it for any reason, you can run:
```
php artisan migrate:reset
```

## Serving the Application
You're more than welcome to set this application up inside of [`nginx`](https://www.nginx.com/) or [`httpd (Apache)`](https://httpd.apache.org/)- configuring [Laravel for both is well-documented](https://laravel.com/docs/6.x/installation#web-server-configuration)- but the quickest way to run the application locally is to use `artisan`'s `serve` command, as shown below:
```
php artisan serve --port=<desired port, 8080 by default>
```

Note that if you really need to use port `80`, elevated privileges will be required.

