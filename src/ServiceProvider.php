<?php

namespace RapidWeb\NoPostDataLaravelMiddleware\Http\Providers;

class ServiceProvider extends Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/NoPostData.php' => config_path('NoPostData.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/NoPostData.php', 'NoPostData'
        );
    }
}
