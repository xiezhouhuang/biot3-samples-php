<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultDeviceOperationLogEntity extends SplBean
{
    public string $message;
    public array $result; //PagerResultDeviceOperationLogEntity
    public int $status;
    public string $code;
    public int $timestamp;

}