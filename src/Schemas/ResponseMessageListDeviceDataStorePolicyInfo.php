<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceDataStorePolicyInfo extends SplBean
{
    public string $message;
    public array $result; // DeviceDataStorePolicyInfo
    public int $status;
    public string $code;
    public int $timestamp;

}