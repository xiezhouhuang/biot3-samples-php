<?php


namespace Kyzone\BIot\ServiceProviders;

use Kyzone\BIot\Device\Device;
use Kyzone\BIot\Device\DeviceOpt;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class DeviceServiceProvider implements ServiceProviderInterface
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
        $pimple['device'] = function ($pimple) {
            return new Device($pimple['access_token']);
        };
        $pimple['deviceOpt'] = function ($pimple) {
            return new DeviceOpt($pimple['access_token']);
        };
    }
}