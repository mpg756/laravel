<?php
/**
 * Project: laravel
 * Author: valera
 * Date: 04.07.15
 * Time: 0:36
 */

namespace App\Providers;

use App\Lib\Phone as Phone;

use Illuminate\Support\ServiceProvider;

class SmartphoneServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('smart', function(){
            return new Phone\Smartphone(new Phone\Processor, new Phone\Display, new Phone\Camera, new Phone\Battery);
        });
    }
}
