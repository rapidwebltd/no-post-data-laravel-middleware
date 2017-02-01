# No Post Data Laravel Middleware

Under certain conditions, when posting data from a form, the web server may loose the post data. This commonly happens if a user is uploading a large 
file beyond the size limits set in the web server's configuration.

Laravel does not handle this situation and may end up throwing a somewhat confusing `TokenMismatchException in VerifyCsrfToken` due to CSRF protection.

The 'No Post Data Laravel Middleware' handles situations in which a request a post request has been submitted and contains no post data - a situation 
which should not occur under normal usage. By default, the middleware will redirect back to the previous page with an error message flashed to the 
session. This can then be output on your view as you would normally handle validation errors.

If needed, you can also modify this default behaviour and allow any code to run when the 'post request with no post data' situation is encountered.

## Installation

1. Run `composer require rapidwebltd/no-post-data-laravel-middleware`.
2. Add `RapidWeb\NoPostDataLaravelMiddleware\ServiceProvider::class,` to the `providers` array in your `config/app.php` file.
3. Add `\RapidWeb\NoPostDataLaravelMiddleware\Http\Middleware\NoPostData::class,` to the `middleware` array in your `app/Http/Kernel.php` file. 
This must be added after `\Illuminate\View\Middleware\ShareErrorsFromSession::class,` and before `\App\Http\Middleware\VerifyCsrfToken::class,`.
4. Run `php artisan vendor:publish`.
5. If you wish, edit the default `errorMessage` variable in your newly published `config/nopostdata.php` file.
6. If you want to fully change the middleware's behaviour, you can also edit the `closure` variable found in the `config/nopostdata.php` file.