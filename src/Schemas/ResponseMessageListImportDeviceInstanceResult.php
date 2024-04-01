<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListImportDeviceInstanceResult extends SplBean
{
    public string  $message;
    public array $result; // ImportDeviceInstanceResult
    public int $status;
    public string $code;
    public int $timestamp;

}