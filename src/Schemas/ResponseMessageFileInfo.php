<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageFileInfo extends SplBean
{
    public string $message;
    public array $result; // FileInfo
    public int $status;
    public string $code;
    public int $timestamp;
}