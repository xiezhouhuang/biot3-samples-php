<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceProperty extends SplBean
{
    public string $message;
    public array $result; // DeviceProperty
    public int $status;
    public string $code;
    public int $timestamp;

}