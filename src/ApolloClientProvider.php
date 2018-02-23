<?php

namespace Diduweiwu\Papollo;

use Illuminate\Support\ServiceProvider;

class ApolloClientProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([__DIR__ . '/config/apollo.php' => config_path('apollo.php')], 'apollo');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'apolloclient',
            function ($app) {
                return new ApolloClient();
            }
        );
    }

    public function provides()
    {
        return [
            'apolloclient',
        ]; // TODO: Change the autogenerated stub
    }
}
