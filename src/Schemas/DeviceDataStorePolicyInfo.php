<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceDataStorePolicyInfo extends SplBean
{

    public string $id;//	string
    public string $name;//	string
    public string $description;//	string
    public array $configMetadata;//ConfigMetadata{...}

}