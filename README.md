## Task Management CRUD Application

It was built using Laravel 8.12.


To begin, Admin must create an account, then after this authentication has been done successfully, admin can go ahead and create, edit, delete and view tasks



# Installation Procedure

1. Clone Project
````sh
git clone https://github.com/DevAmby/entrytestcrud.git
````
2. Run Composer install or Update
````sh
composer update
````
3. Copy `.env.example` file and create `.env` file
4. Add Database Credential in `.env`
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```
5. Generate APP_KEY
```sh
php artisan key:generate
```
6. Migrate database table
```sh
php artisan migrate
```
7. Run Optimization
```sh
php artisan optimize
```

8. Go to the project - 
```sh
cd entrytestcrud
```
9. Run Project inside that directory - 
````sh
php artisan serve
````
10. Open in Browser 
````sh
http://localhost:8000
````

