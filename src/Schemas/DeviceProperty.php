<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceProperty extends SplBean
{
    public string $id;//	string ID

    public string $deviceId;//	string 设备ID

    public string $property;//	string 属性ID

    public string $propertyName;//	string属性名

    public string $type;//	string 类型

    public string $unit;//	string 单位

    public array $value;//	{...}
    public array $formatValue;//	{...}
    public int $createTime;//	integer($int64) 创建时间

    public int $timestamp;//	integer($int64) 数据时间

    public string $formatTime;//	string 格式化后的时间,在聚合查询时此字段有值

    public string $state;//	string 状态值

}