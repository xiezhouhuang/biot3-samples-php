<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceProductEntity extends SplBean
{
    public string $message;
    public array $result; // PagerResultDeviceProductEntity
    public int $status;
    public string $code;
    public int $timestamp;


}