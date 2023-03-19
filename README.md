#PUC software
## Installation process:
- Download tag or release from github.com 
- Open the console and cd your project root directory
- Run `cp .env.example .env'
- Modify the database name in the .env file .
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve --host 0.0.0.0 --port 80`

##### You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`

