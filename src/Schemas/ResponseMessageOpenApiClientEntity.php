<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageOpenApiClientEntity extends SplBean
{
    public string $message;
    public array $result;
    public int $status;
    public string $code;
    public int $timestamp;

}