<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class AggRequest extends SplBean
{

    public array $columns;//  DevicePropertyAggregation 数组
    public AggregationRequest $query; //	AggregationRequest
}