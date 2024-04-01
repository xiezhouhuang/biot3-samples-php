<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceInfo extends SplBean
{
    public string $message;
    public array $result; //PagerResultDeviceInfo
    public int $status;
    public string $code;
    public int $timestamp;

}