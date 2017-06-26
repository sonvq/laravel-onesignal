<?php

namespace Sonvq\OneSignal;

use Illuminate\Support\ServiceProvider;

class OneSignalExtraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/onesignalextra.php';

        $this->publishes([$configPath => config_path('onesignalextra.php')], 'config');
        $this->mergeConfigFrom($configPath, 'onesignalextra');

        if ( class_exists('Laravel\Lumen\Application') ) {
            $this->app->configure('onesignalextra');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('onesignalextra', function ($app) {
            $config = isset($app['config']['services']['onesignalextra']) ? $app['config']['services']['onesignalextra'] : null;
            if (is_null($config)) {
                $config = $app['config']['onesignalextra'] ?: $app['config']['onesignalextra::config'];
            }

            $client = new OneSignalClient($config['app_id_extra'], $config['rest_api_key_extra'], $config['user_auth_key_extra']);

            return $client;
        });
    }

    public function provides() {
        return ['onesignalextra'];
    }


}
