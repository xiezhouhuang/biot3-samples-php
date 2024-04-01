<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class OpenApiClientEntity extends SplBean
{

    public string $id; //	string客户端ID

    public string $clientName; //	string 名称

    public string $secureKey; //	string 密钥

    public string $ipWhiteList; //	string IP白名单,多个用,分隔

    public string $signature; //	string 签名方式,MD5或者SHA256

    public string $userId; //	string 用户ID

    public string $username; //	string 用户名

    public string $password; //	string 密码(仅新增)

    public string $description; //	string 说明

    public string $status; //	string($byte) 状态

    public string $creatorId; //	string 创建SaveClientRequest人

    public int $createTime; //	integer($int64) 创建时间

    public bool $enableOAuth2; //	boolean 是否开启OAuth2

    public string $redirectUrl; //	string
    public array $permissions; //	[...]
    public string $creatorName; //string writeOnly: true
}