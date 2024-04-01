<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class PagerResultDeviceEvent extends SplBean
{


    public int $pageIndex;//	integer($int32) 页码

    public  int $pageSize;//	integer($int32) 每页数据量

    public int $total;//	integer($int32) 数据总量

    public array $data;//	[ 数据列表 DeviceEvent{...}]
}