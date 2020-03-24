<?php

namespace Krts\Video;

// use Pvtl\VoyagerVideo\Commands;
use Illuminate\Support\ServiceProvider;

class VideoServiceProvider extends ServiceProvider
{
 
    /**
     * Bootstrap the application services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'video');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/video')
        ]);


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('video', function($app){
            return new video;
        });
    }

  

}
