<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceCategoryEntity extends SplBean
{
    public string $message;
    public array $result; // DeviceCategoryEntity
    public int $status;
    public string $code;
    public int $timestamp;

}