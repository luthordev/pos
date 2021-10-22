<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('active', function ($expression) {
            return "{{request()->is($expression) ? 'active' : ''}}";
        });

        Blade::directive('money', function ($money) {
            return "<?php echo number_format($money, 0); ?>";
        });

        Blade::directive('date', function ($date) {
            return "<?php echo date_format(date_create($date), 'd/M/Y'); ?>";
        });
    }
}
