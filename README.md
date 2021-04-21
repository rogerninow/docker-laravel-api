# Laravel API 
Base Laravel structure for API's.

## Stack 
Docker with PHP 7.4, Nginx Alpine, Mysql 5.7, Redis and Xdebug.

You can change the default ports on docker-compose.yml.

## Getting started
1. Install [Docker](https://docs.docker.com/get-docker/);
1. Create .env file (use .env.example);
1. Change "fastcgi_pass" parameter in `/docker/nginx/app.conf`; 
1. Run `docker-compose build app`;
1. Run `docker-compose up`;
1. Create and setup database;
1. Run `docker-compose exec app composer install`;
1. Run `docker-compose exec app php artisan migrate`;
1. Run `docker-compose exec app php artisan db:seed`;
1. Run `docker-compose exec app php artisan passport:install`.

### Plus
1. Dynamic routes (with autoload);
1. Removed unnecessary files;

## License

[MIT license](https://opensource.org/licenses/MIT).
