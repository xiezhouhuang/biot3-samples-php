<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceProductEntity extends SplBean
{


    public string $id; //  pattern: ^[0-9a-zA-Z_\-]+$  ID

    public string $name; //  产品名称

    public string $photoUrl; // 	 图片地址

    public string $describe; // 	 说明

    public string $classifiedId; // 	 所属品类ID

    public string $classifiedName; // 	 所属品类名称

    public string $messageProtocol; // 	 消息协议ID

    public string $protocolName; // 	 deprecated: true 消息协议名称

    public string $metadata; // 	 物模型定义

    public string $transportProtocol; //  传输协议

    public string $networkWay; // 	 入网方式

    public string $deviceType; //  设备类型 Enum:Array [ 3 ]
    public array $configuration; // 	{...}
    public string $state; // 	string($byte)  产品状态 1正常,0禁用

    public string $creatorId; // 	string 创建者ID(只读)

    public int $createTime; // 	integer($int64) 创建者时间(只读)

    public string $orgId; // 	string 机构ID

    public string $accessId; // 	string设备接入方式ID

    public string $accessProvider; // 	string设备接入方式

    public string $accessName; // 	string 设备接入方式名称

    public string $storePolicy; // 	string 数据存储策略

    public string $storePolicyConfiguration; // 	{...}
    public string $modifierId; // 	 修改人

    public int $modifyTime; // 修改时间

    public string $creatorName;    //  : true
    public string $modifierName; // string writeOnly: true

}