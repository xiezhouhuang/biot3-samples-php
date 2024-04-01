<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageString extends SplBean
{
    public string $message;
    public string  $result;
    public int $status;
    public string $code;
    public int $timestamp;

}