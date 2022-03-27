<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Example\Example;
class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        app()->singleton('example', function (){
            return  new Example();
        }) ;
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
