<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceTagEntity extends SplBean
{
    public string $id; //	stringid

    public string $deviceId;//		string设备ID

    public string $key;//		string 标签标识

    public string $name;//		string 标签名称

    public string $value;//		string 标签值

    public string $type;//	string default: string 类型

    public string $createTime;//		string($date-time) 创建时间(只读)

    public string $description;//	string 说明

    public array $dataType;//	DataType{...}

}