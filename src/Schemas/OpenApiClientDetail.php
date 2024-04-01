<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class OpenApiClientDetail extends SplBean
{
    public string $id;//string ID

    public string $clientName;//string 名称

    public string $secureKey;//string 密钥

    public string $ipWhiteList;//	string IP白名单,多个用,分隔

    public string $signature;//	string 签名方式,MD5或者SHA256

    public string $userId;//string 用户ID

    public string $username;//string 用户名

    public string $description;//	string 说明

    public string $status;//string($byte) 状态

    public string $creatorId;//	string 创建人

    public int $createTime;//	integer($int64) 创建时间

    public bool $enableOAuth2;//	boolean 是否开启OAuth2

    public string $redirectUrl;//	string permissions	[绑定权限信息PermissionInfo{...}]
    public array $orgList;//	[ 所在机构(部门)信息 OrganizationInfo{...}]

}