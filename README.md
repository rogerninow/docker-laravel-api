# Laravel API 
Base dockerized API with Laravel and Passport.

## Stack 
Docker with PHP 7.3, Nginx Alpine, Mysql 5.7, Redis and Xdebug.

You can change the default ports on docker-compose.yml.

## Getting started
1. Install [Docker](https://docs.docker.com/get-docker/);
1. Update or create .env file (use .env.example);
1. Change "fastcgi_pass" in nginx conf file "app.conf", inside docker-compose/nginx; 
1. Run `docker-compose build app`;
1. Run `docker-compose up`;
1. Create and setup database;
1. Run `composer install`;
1. Run `php artisan migrate`;
1. Run `php artisan db:seed`.

### Plus
1. Dynamic routes autoload;
1. Removed unnecessary files;

## License

[MIT license](https://opensource.org/licenses/MIT).
