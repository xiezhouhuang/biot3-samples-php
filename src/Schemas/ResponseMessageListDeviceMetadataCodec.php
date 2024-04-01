<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ResponseMessageListDeviceMetadataCodec extends SplBean
{

    public string $message;
    public array $result; //DeviceMetadataCodec
    public int $status;
    public string $code;
    public int $timestamp;

}