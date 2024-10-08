<?php

declare(strict_types=1);

namespace BladeUI\Quicksand;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeQuicksandServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-quicksand', []);

            $factory->add('quicksand', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-quicksand.php', 'blade-quicksand');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-quicksand'),
            ], 'blade-quicksand');

            $this->publishes([
                __DIR__.'/../config/blade-quicksand.php' => $this->app->configPath('blade-quicksand.php'),
            ], 'blade-quicksand-config');
        }
    }
}
