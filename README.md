# Basic Website in Laravel

This is my first webpage using Laravel framework.
A simple application consisting of a home page, about, contact containing a form that sends it to the database.
The application can also display the messages contained in the database.

## Installation

- First, clone the github repo
- Install Composer Dependencies
```bash
composer install
```
- Install NPM Dependencies
```bash
npm install
```
- Create a copy of your .env file
```bash
cp .env.example .env
```
- Generate an app encryption key
```bash
php artisan key:generate
```
- Create an empty database for our application
- In the .env file, add database information to allow Laravel to connect to the database
- Migrate the database
```bash
php artisan migrate
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
