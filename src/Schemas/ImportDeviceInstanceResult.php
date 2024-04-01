<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class ImportDeviceInstanceResult extends SplBean
{

    public array $result;//
    public bool $success;//	boolean
    public string $message;//	string
    public string $detailFile;//string
}