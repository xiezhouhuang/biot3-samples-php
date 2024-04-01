<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageInteger extends SplBean
{
    public string $message;
    public int $result;
    public int $status;
    public string $code;
    public int $timestamp;
}