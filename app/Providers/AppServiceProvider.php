<?php

namespace App\Providers;

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
        // Mandrill Custom App Service Provider Setting 
        $this->app->singleton('mailer', function ($app) {
        $app->configure('services');
        return $app->loadComponent('mail', 'Illuminate\Mail\MailServiceProvider', 'mailer');
    });
    }
}
