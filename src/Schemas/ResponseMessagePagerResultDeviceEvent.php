<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceEvent extends SplBean
{
    public string $message;
    public array $result; // PagerResultDeviceEvent
    public int $status;
    public string $code;
    public int $timestamp;

}