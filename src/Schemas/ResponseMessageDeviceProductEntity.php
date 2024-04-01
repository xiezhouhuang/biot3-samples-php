<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageDeviceProductEntity extends SplBean
{
    public string $message;
    /** @var DeviceProductEntity */
    public array $result;
    public int $status;
    public string $code;
    public int $timestamp;


}