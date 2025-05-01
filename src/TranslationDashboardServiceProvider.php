<?php

namespace Dev3bdulrahman\TranslationDashboard;

use Illuminate\Support\ServiceProvider;

class TranslationDashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish assets
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/translation-dashboard'),
        ], 'translation-dashboard-assets');
    }
}
