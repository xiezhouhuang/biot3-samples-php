<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceProperty extends SplBean
{

    public string $message;
    public array $result; // PagerResultDeviceProperty;
    public int $status;
    public string $code;
    public int $timestamp;

}