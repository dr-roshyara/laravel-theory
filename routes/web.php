<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/container', function () {
    $container = new App\Container\Container();
    $container->bind('example', function (){
         return new App\Example\Example();
     } );
     $example = $container->resolve('example');
     $example->go();
    dd($example);

});
