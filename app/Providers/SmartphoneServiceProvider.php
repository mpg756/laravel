<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 04.07.15
 * Time: 0:36
 */

namespace App\Providers;


use App\Lib\Phone as Phone;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class SmartphoneServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind('smart', function(Phone\Processor $processor, Phone\Display $display, Phone\Camera $camera, Phone\Battery $battery){
            return new Phone\Smartphone($processor,$display,$camera,$battery);
        });
    }

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}