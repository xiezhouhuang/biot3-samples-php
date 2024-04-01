<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceStateInfo extends SplBean
{

    public string $message;
    public array $result;  //DeviceStateInfo
    public int $status;
    public string $code;
    public int $timestamp;
}