<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceTagEntity extends SplBean
{
    public string $message;
    public array $result;  //DeviceTagEntity
    public int $status;
    public string $code;
    public int $timestamp;
}