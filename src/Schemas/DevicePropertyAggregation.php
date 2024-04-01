<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DevicePropertyAggregation extends SplBean
{

    public string $property; //	string 属性ID

    public string $alias;// 	string 别名,默认和property一致

    public string $agg;//	string 聚合方式,支持(count,sum,max,min,avg)


}