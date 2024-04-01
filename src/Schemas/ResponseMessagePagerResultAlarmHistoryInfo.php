<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessagePagerResultAlarmHistoryInfo extends SplBean
{
    public string $message;
    public array $result; //PagerResultAlarmHistoryInfo
    public int $status;
    public string $code;
    public int $timestamp;
}