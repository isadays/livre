# <b>Livre</b>
Course Conclusion Work - Systems Development.

Free, is a web application made in PHP on an MVC framework, which allows people to donate books they no longer need.

## How to use

### Dependencies

* PHP >= 8
* Git
* Composer >= 2
* Preferably Mariadb, but you can opt for others, because the project uses PDO by default.

### Running the project

#### 1 - Clone this repository on your PHP server
```
git clone https://github.com/isadays/livre.git
```

#### 2 - Open the folder in your IDE of choice.

#### 3 - Configure the file Config.php

```PHP
/*
 * Substitute for your localhost corresponding to your project folder
 * */ 
const ROOT = "http://localhost/livre/";

/*
 * Name of the site
 * */
const SITE = "Livre";

/*
 * Config you data
 * */
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "livre",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];
```
#### 4 - Run the migrations

In path "/migrations", you can find the migration data of the project.

You can run it on your favorite database

#### 5 - Install composer on the project
```
composer install
```
#### 5 - Ready!

Now just access your project's URL.

Example:

[http://localhost/livre/](http://localhost/livre/)
