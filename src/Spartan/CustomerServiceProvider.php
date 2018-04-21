<?php

namespace Loopy\Spartan;

use Illuminate\Support\ServiceProvider;
use Loopy\Spartan\Http\Client;

class CustomerServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client(config('services.spartan.id'), config('services.spartan.secret'),['base_uri' => env('AGGREGATOR_URL','https://ca.spartancash.co.ke')]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Client::class];
    }
}