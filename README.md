## Dr.Fuzzypaw's Blog

•	Author: Mariela Machuca Palmeros <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Creating Blogs <br>
•	You will only be able to Create a new blog if you're logged in as Dr.Fuzzypaws<br>
•	The image is obligatory <br>
•	The Image has to have a max-width of 650px.

## Writing Reviews <br>
•	You will only be able to write a new review if you're logged in<br>
•	You will only be able to delete your own review. <br>
•	Dr. Fuzzypaws can delete any review.

## Log in as Dr.Fuzzypaws <br>
Email: Dr@Dr.com <br>
Password: 12345678
