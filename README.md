# CakePHP Testing Application

A cakephp test application. [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Clone/download this repo
3. Run `php composer.phar install`. If Composer is installed globally, run

```bash
composer install
```
4. Create the database, to do so run:

```bash
bin/cake migrations migrate
```

5. Run the app

```bash
bin/cake server
```


You should now be able to visit the path to where you installed the app and see the default home page.

## Configuration

The app has a SQLite database built-in, using default configuration should be enough.
