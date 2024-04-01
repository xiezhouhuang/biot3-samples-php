<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class Sort extends SplBean
{
    public string $name;//	string字段名
    public string $order;//	string maxLength: 4 minLength: 3 排序方式 Enum: [ asc, desc ]
    public array $value;//	{...}
}