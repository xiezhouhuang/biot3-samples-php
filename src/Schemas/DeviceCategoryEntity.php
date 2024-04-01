<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceCategoryEntity extends SplBean
{

    public string $id; // string pattern: ^[0-9a-zA-Z_\-|]+$ id

    public string $parentId;//	string父节点ID

    public string $path;//	string树结构路径

    public int $sortIndex;//	integer($int64) 排序序号

    public int $level;//	integer($int32) 树层级

    public string $key;//	string pattern: ^[0-9a-zA-Z_\-]+$标识

    public string $name;//	string 名称

    public string $description;//	string说明

    public array $children;//	[...]
    public string $metadata;//	string 物模型

    public string $creatorId;//	string readOnly: true 创建者ID(只读)

    public int $createTime;//	integer($int64) readOnly: true 创建时间(只读)

    public string $creatorName;//	string writeOnly: true
}