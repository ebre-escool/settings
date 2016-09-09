<?php

namespace Escool\Settings\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EscoolServiceProvider.
 */
class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register('Acacha\Profile\Providers\ProfileServiceProvider');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

}