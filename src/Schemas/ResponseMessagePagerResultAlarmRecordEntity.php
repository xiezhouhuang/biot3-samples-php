<?php


namespace Kyzone\BIot\Schemas;


class ResponseMessagePagerResultAlarmRecordEntity
{
    public string $message;
    public array $result; // PagerResultAlarmRecordEntity
    public int $status;
    public string $code;
    public int $timestamp;

}