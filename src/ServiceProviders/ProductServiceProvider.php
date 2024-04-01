<?php


namespace Kyzone\BIot\ServiceProviders;


use Kyzone\BIot\Product\Product;
use Kyzone\BIot\Product\ProductCategory;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ProductServiceProvider implements ServiceProviderInterface
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
        $pimple['product'] = function ($pimple) {
            return new Product($pimple['access_token']);
        };
        $pimple['productCategory'] = function ($pimple) {
            return new ProductCategory($pimple['access_token']);
        };
    }
}