<?php

namespace App\Services\SMS;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use App\Services\SMS\Drivers\MvayooSMS;

class SMSServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/sms.php' => config_path('sms.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sms', function ($app) {
            $sms = new SMS($this->registerSender());
            $sms->setContainer($app);
            $sms->setLogger($app['log']);
            $sms->setQueue($app['queue']);
            //Set the from and pretending settings
            if ($from = config('sms.from', false)) $sms->alwaysFrom($from);
            $sms->setPretending(config('sms.pretend', false));
            return $sms;
        });
    }

    /**
     * Register the correct driver based on the config file.
     *
     * @return MvayooSMS
     * @throws \InvalidArgumentException
     */
    public function registerSender()
    {
        $driver = config('sms.driver');
        switch ($driver) {
            case 'mvayoo':
                return $this->buildMvayoo();
            default:
                throw new \InvalidArgumentException('Invalid SMS driver.');
        }
    }

    protected function buildMvayoo()
    {
        $provider = new MvayooSMS(new Client);
        $data = [
            'user' => config('sms.mvayoo.username'). ':' .config('sms.mvayoo.password'),
        ];
        $provider->buildBody($data);
        return $provider;
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('sms', 'mvayoosms');
    }
}
