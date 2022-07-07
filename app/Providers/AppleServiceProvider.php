<?php

namespace App\Providers;

use App\Apple;
use Illuminate\Support\ServiceProvider;

class AppleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('apple',function(){
            return new Apple();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
