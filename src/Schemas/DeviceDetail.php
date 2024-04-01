<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceDetail extends SplBean
{
    public string $id; //	string 设备ID
    public string $name; //string设备名称
    public string $photoUrl; //	string 图片地址

    public string $protocol; //	string 消息协议ID

    public string $protocolName; //	string 消息协议名称

    public string $transport; //	string 通信协议

    public string $orgId; //	string 机构ID

    public string $orgName; //	string 机构名称

    public string $productId; //	string 产品ID

    public string $productName; //	string 产品名称

    public string $deviceType; //	string 设备类型Enum[ {text=直连设备, value=device}, {text=网关子设备, value=childrenDevice}, {text=网关设备, value=gateway} ]
    public string $state; //	string 设备状态Enum: [ {text=禁用, value=notActive}, {text=离线, value=offline}, {text=在线, value=online} ]
    public string $address; //	stringip地址

    public int $onlineTime; //	integer($int64) 上线时间

    public int $offlineTime; //	integer($int64) 离线时间

    public int $createTime; //	integer($int64) 创建时间

    public int $registerTime; //	integer($int64) 激活时间

    public string $metadata; //	string 物模型

    public string $productMetadata; //	string 产品物模型

    public bool $independentMetadata; //	boolean 是否为独立物模型

    public array $configuration; //	{ description: 配置信息  < * >:	{...} }
    public array $cachedConfiguration; //	{description:已生效的配置信息< * >:	{...} }
    public bool $aloneConfiguration; //	boolean 是否为单独的配置,false表示部分配置信息继承自产品.

    public string $parentId; //	string 父设备ID

    public array  $tags; //[ 标签信息 DeviceTagEntity{...}]
    public string $description; //	string 设备描述

    public array $relations; //	[ 关系信息RelatedInfo{...}]
    public array $features; //[设备特性Feature{...}]
    public string $accessId; //string 设备接入方式ID

    public string $accessProvider; //	string 设备接入方式

    public string $accessName; //	string 设备接入方式名称

    public string $classifiedId; //	string 产品所属品类ID

    public string $classifiedName; //string 产品所属品类名称

}