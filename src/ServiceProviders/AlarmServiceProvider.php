<?php


namespace Kyzone\BIot\ServiceProviders;

use Kyzone\BIot\Alarm\Alarm;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AlarmServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['alarm'] = function ($pimple) {
            return new Alarm($pimple['access_token']);
        };
    }
}