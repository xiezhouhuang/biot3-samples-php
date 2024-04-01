<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceInfo extends SplBean
{

    public string $id; //string设备ID

    public string $name; //	string 设备名称

    public string $productId; //	string 产品ID

    public string $productName; //	string 产品名称

    public string $state; //	string 设备状态 [ {text=禁用, value=notActive}, {text=离线, value=offline}, {text=在线, value=online} ]
    public int $registerTime; //	integer($int64) 激活时间

    public int $createTime; //	integer($int64) 创建时间

    public string $parentId; //	string 父设备ID

}