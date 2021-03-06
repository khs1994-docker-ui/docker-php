<?php

declare(strict_types=1);

namespace Docker\Container;

use Pimple\Container as ServiceContainer;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(ServiceContainer $pimple): void
    {
        $pimple['container'] = function ($app) {
            return new Client($app['curl'], $app['docker_host'], $app->image);
        };
    }
}
