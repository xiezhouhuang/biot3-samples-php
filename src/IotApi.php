<?php


namespace Kyzone\BIot;


use Hanson\Foundation\Foundation;
use Kyzone\BIot\Alarm\Alarm;
use Kyzone\BIot\Core\AccessToken;
use Kyzone\BIot\Device\Device;
use Kyzone\BIot\Device\DeviceData;
use Kyzone\BIot\Device\DeviceOpt;
use Kyzone\BIot\File\File;
use Kyzone\BIot\Product\Product;
use Kyzone\BIot\Product\ProductCategory;

/**
 * Class IotApi.
 *
 * @property AccessToken $access_token
 * @property Device $device
 * @property DeviceOpt $deviceOpt
 * @property DeviceData $deviceData
 * @property Product $product
 * @property ProductCategory $productCategory
 * @property File $file
 * @property Alarm $alarm
 */
class IotApi extends Foundation
{
    protected $providers = [
        ServiceProviders\AccessTokenServiceProvider::class,
        ServiceProviders\DeviceServiceProvider::class,
        ServiceProviders\ProductServiceProvider::class,
        ServiceProviders\FileServiceProvider::class,
        ServiceProviders\AlarmServiceProvider::class
    ];
}