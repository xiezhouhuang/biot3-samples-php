<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class AggregationRequest extends SplBean
{

    public string $interval; //	string default: 1d 间隔,如: 1d

    public string $format; //	string default: 时间格式,如:yyyy-MM-dd yyyy-MM-dd

    public string $from; //	string($date-time) 时间从,如: 2020-09-01 00:00:00,支持表达式: now-1d

    public string $to; //	string($date-time) 时间到,如: 2020-09-30 00:00:00,支持表达式: now-1d

    public int $limit; //	integer($int32) 实例限制

    public QueryParamEntity $filter;
}