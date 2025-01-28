php -r "touch('database\database.sqlite');"

php -r "copy('.env.example', '.env');"

composer install

php artisan migrate:fresh --seed

php artisan key:generate

code .
