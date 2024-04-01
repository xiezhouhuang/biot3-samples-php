<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class OrganizationInfo extends SplBean
{

    public string $id;//	string 机构(部门ID)

    public string $name;//string 名称

    public string $code;//string 编码

    public string $parentId;//string 上级ID

    public int $sortIndex;//	integer($int64) 序号

}