<?php


namespace Kyzone\BIot\ServiceProviders;

use Kyzone\BIot\File\File;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class FileServiceProvider implements ServiceProviderInterface
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
        $pimple['file'] = function ($pimple) {
            return new File($pimple['access_token']);
        };
    }
}