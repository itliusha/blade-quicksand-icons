<?php

declare(strict_types=1);

namespace BladeUI\QuicksandIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeQuicksandIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-quicksand-icons', []);

            $factory->add('quicksand-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-quicksand-icons.php', 'blade-quicksand-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-quicksand-icons'),
            ], 'blade-quicksand-icons');

            $this->publishes([
                __DIR__.'/../config/blade-quicksand-icons.php' => $this->app->configPath('blade-quicksand-icons.php'),
            ], 'blade-quicksand-config');
        }
    }
}
