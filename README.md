# Laravel Migrations Generator

[![Build Status](https://travis-ci.org/kitloong/laravel-migrations-generator.svg)](https://travis-ci.org/kitloong/laravel-migrations-generator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kitloong/laravel-migrations-generator/badges/quality-score.png?b=3.x)](https://scrutinizer-ci.com/g/kitloong/laravel-migrations-generator/?branch=3.x)

Generate Laravel Migrations from an existing database, including indexes and foreign keys!

This package is cloned from https://github.com/Xethron/migrations-generator and updated to support Laravel 6 and above.

## Version Compatibility

|Laravel|Version|
|---|---|
|7.x|3.x|
|6.x|3.x|
|5.8.x|3.x|
|5.7 and below|https://github.com/Xethron/migrations-generator|

## Laravel Installation

The recommended way to install this is through composer:

```bash
composer require --dev "kitloong/laravel-migrations-generator"
```

## Usage

To generate migrations from a database, you need to have your database setup in Laravel's Config.

Run `php artisan migrate:generate` to create migrations for all the tables, or you can specify the tables you wish to generate using `php artisan migrate:generate table1,table2,table3,table4,table5`. You can also ignore tables with `--ignore="table3,table4,table5"`

Laravel Migrations Generator will first generate all the tables, columns and indexes, and afterwards setup all the foreign key constraints. So make sure you include all the tables listed in the foreign keys so that they are present when the foreign keys are created.

You can also specify the connection name if you are not using your default connection with `--connection="connection_name"`

Run `php artisan help migrate:generate` for a list of options.

## Thank You

Thanks to Xethron for his great work. This package is cloned from https://github.com/Xethron/migrations-generator

Thanks to Jeffrey Way for his amazing Laravel-4-Generators package. This package depends greatly on his work.

## Contributors

Bernhard Breytenbach ([@BBreyten](https://twitter.com/BBreyten))

## License

The Laravel Migrations Generator is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
