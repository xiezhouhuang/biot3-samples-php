<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageBoolean extends SplBean
{

    public string $message;
    public bool $result;
    public int $status;
    public string $code;
    public int $timestamp;
}