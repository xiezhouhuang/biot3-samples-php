<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageDeviceState extends SplBean
{
    public const ENUM = [
        ["text" => "禁用", "value" => "notActive"],
        ["text" => "离线", "value" => "offline"],
        ["text" => "在线", "value" => "online"]
    ];

    public string $message;
    public array $result;
    public int $status;
    public string $code;
    public int $timestamp;
}