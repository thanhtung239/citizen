<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel 8 Scaffold

Quickly set up skeleton for your Laravel 8.x app

## Features:
- PHP mess detector: `./vendor/bin/phpmd app,database,routes,tests text phpmd.xml`
- PHP_CodeSniffer: `./vendor/bin/phpcs`
- Auto check coding convention using Github Action
- Authentication by email & password

## Install:
1. Clone this project
2. Run `composer install`
3. Run `npm install & npm run dev`
4. Create .env file : `cp .env.example .env`
5. Generate app key : `php artisan key:generate`
6. Migrate database: `php artisan migrate`
7. Seed database: `php artisan db:seed`
8. Config administrative unit database: `php artisan vietnam-map:install`
9. Open up web server: `php artisan serve`
10. Home page: `localhost:8000`
11. Ward admin: `localhost:8000/ward_admin/login`
12. Ward admin account: Username: thanhne@citizen.gov.vn
                        Password: 1
13. Auto run dev: `npm run watch` ( turn off notifications :D )


## Technical support:

- [Facebook](https://www.facebook.com/thanhtung239/)


