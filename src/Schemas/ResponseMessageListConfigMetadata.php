<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListConfigMetadata extends SplBean
{
    public string $message;
    public array $result; // ConfigMetadata
    public int $status;
    public string $code;
    public int $timestamp;
}