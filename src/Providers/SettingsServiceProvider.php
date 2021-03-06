<?php

namespace Escool\Settings\Providers;

use Illuminate\Support\ServiceProvider;
use Acacha\Profile\Providers\ProfileServiceProvider;

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
        $this->app->register(ProfileServiceProvider::class);
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