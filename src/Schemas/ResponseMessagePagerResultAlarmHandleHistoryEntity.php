<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultAlarmHandleHistoryEntity extends SplBean
{
    public string $message;
    public array $result; //PagerResultAlarmHandleHistoryEntity
    public int $status;
    public string $code;
    public int $timestamp;
}