<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceDetail extends SplBean
{

    public string $message;
    public array $result; // PagerResultDeviceDetail
    public int $status;
    public string $code;
    public int $timestamp;
}