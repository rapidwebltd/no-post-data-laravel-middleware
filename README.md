# No Post Data Laravel Middleware

## Installation

1. Add `RapidWeb\NoPostDataLaravelMiddleware\ServiceProvider::class` to the `providers` array in your `config/app.php` file.
2. Add `RapidWeb\NoPostDataLaravelMiddleware\Http\Middleware::class` to the `middleware` array in your `app/Http/Kernel.php` file.
3. Run `php artisan vendor:publish`
4. If you wish, edit the `errorMessage` variable in your newly published `config/NoPostData.php` file.

