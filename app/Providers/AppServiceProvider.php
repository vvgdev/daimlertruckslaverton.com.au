<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('currency_format', function ($money) {
            return "<?php 
                if(isset($money)) {
                    echo '$ ' . number_format($money);
                } else {
                    echo ''; 
                }
            ?>";
        });
    }
}
