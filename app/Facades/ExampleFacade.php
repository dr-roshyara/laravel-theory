<?php 
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ExampleFacade extends Facade{

    public static function getFacadeAccessor(){
        return 'example';
    }
}

