<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListMapStringObject extends SplBean
{

    public string $message;
    public $result;
    public int $status;
    public string $code;
    public int $timestamp;
}