<?php

namespace Amentotech\LaraPayEase;

use Amentotech\LaraPayEase\Factories\PaymentFactory;
use Illuminate\Support\ServiceProvider;

class PayEaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'payease');
        $this->publishes([
            __DIR__.'/../config/payease.php' => config_path('payease.php'),
        ]);
    }

    public function register()
    {
        $configPath = __DIR__ . '/../config/payease.php';
        $this->mergeConfigFrom($configPath, 'payease');
        $this->mergeConfigFrom(
            __DIR__.'/../config/payease.php', 'payease'
        );

        $this->app->singleton('payment.driver', function ($app) {
            return new PaymentFactory();
        });

    }
}
