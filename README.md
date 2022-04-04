----- Migrate -----
https://github.com/kitloong/laravel-migrations-generator
1. composer require --dev "kitloong/laravel-migrations-generator"
## Usage

To generate migrations from a database, you need to have your database setup in Laravel's config (`config/database.php`).

To create migrations for all the tables, run:

```bash
php artisan migrate:generate
```

You can specify the tables you wish to generate using:

```bash
php artisan migrate:generate --tables="table1,table2,table3,table4,table5"
```

You can also ignore tables with:

```bash
php artisan migrate:generate --ignore="table3,table4,table5"
```

#install composer

#composer global require laravel/installer

#composer update

#npm install

#npm run dev


#php artisan serve

![1](https://user-images.githubusercontent.com/18664928/160970565-86657980-a6d3-42cb-a784-e70515e4053d.JPG)
![2](https://user-images.githubusercontent.com/18664928/160970571-8bcd0bb6-cffc-42d4-b59f-7178aa57fbf4.JPG)

