# Superheroes Database

A simple laravel 5.6 CRUD application .

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

* Download or Clone this repository
* Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.
  Visit <https://laravel.com/docs/5.6> to get more information.
  Download Composer you can [here](https://getcomposer.org/) .
* Create a new MYSQL database ( name - 'superheroes' ).
* Start your local server
* Open up Command Prompt(CMD) or Terminal in the project directory and run these commands:
```
php artisan migrate
```
```
php artisan db:seed
```
```
php artisan storage:link
```
## Running the tests

* Make sure to clear your configuration cache using the command: 
```
php artisan config:clear
```
* Then run command:
```
./vendor/bin/phpunit 
```
or
```
phpunit 
```