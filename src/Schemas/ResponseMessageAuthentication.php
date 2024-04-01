<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageAuthentication extends SplBean
{
    public string $message;
    public array $result; // Authentication
    public int $status;
    public string $code;
    public int $timestamp;

}