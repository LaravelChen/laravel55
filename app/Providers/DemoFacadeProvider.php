<?php

namespace App\Providers;

use App\Http\Com\Demo;
use Illuminate\Support\ServiceProvider;

class DemoFacadeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('demo',function (){
            return new Demo();
        });
    }
}
