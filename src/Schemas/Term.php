<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class Term extends SplBean
{

    public string $column; //	string 字段名
    public array $value; // {description: 条件值 }
    public string $type; //	string default: and  多个条件关联类型 Enum: ['or','and']
    public string $termType; //	string default: eq 动态条件类型
    public array $options; //	 // [ 拓展选项 string 拓展选项 ]
    public array $terms; //[嵌套条件  Term{...}]

}