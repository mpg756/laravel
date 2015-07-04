<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 04.07.15
 * Time: 0:36
 */

namespace App\Providers;

use App\Lib\Phone\Smartphone;
use App\Lib\Phone\Processor;
use App\Lib\Phone\Display;
use App\Lib\Phone\Camera;
use App\Lib\Phone\Battery;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class SmartphoneServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind('smart', function(Processor $processor, Display $display, Camera $camera, Battery $battery){
            return new Smartphone($processor,$display,$camera,$battery);
        });
    }
}