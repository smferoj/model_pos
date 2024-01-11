composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

php artisan optimize
php artisan config:clear
php artisan view:clear
php artisan serve
