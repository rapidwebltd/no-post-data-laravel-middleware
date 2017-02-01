# No Post Data Laravel Middleware

## Installation

1. Run `composer require rapidwebltd/no-post-data-laravel-middleware`
2. Add `RapidWeb\NoPostDataLaravelMiddleware\ServiceProvider::class` to the `providers` array in your `config/app.php` file.
3. Add `RapidWeb\NoPostDataLaravelMiddleware\Http\Middleware\NoPostData::class` to the `middleware` array in your `app/Http/Kernel.php` file. 
This must be added after `\Illuminate\View\Middleware\ShareErrorsFromSession::class` and before `\App\Http\Middleware\VerifyCsrfToken::class`.
4. Run `php artisan vendor:publish`
5. If you wish, edit the `errorMessage` variable in your newly published `config/NoPostData.php` file.

