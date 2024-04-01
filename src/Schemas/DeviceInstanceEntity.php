<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceInstanceEntity extends SplBean
{
    public string $id;//	string pattern: ^[0-9a-zA-Z_\-]+$ 设备ID(只能由数字,字母,下划线和中划线组成)

    public string $photoUrl;//	string 图片地址

    public string $name;//	string 设备名称

    public string $deviceType;//	string 设备类型Enum: [ {text=直连设备, value=device}, {text=网关子设备, value=childrenDevice}, {text=网关设备, value=gateway} ]
    public string $describe;//	string说明

    public string $productId;//	string 产品ID

    public string $productName; //	string 产品名称

    public array $configuration;    //{...}
    public string $deriveMetadata;//	string 派生(独立)物模型

    public string $state;//	string readOnly: true default: notActive 状态(只读)
    public string $creatorId;//	string  readOnly: true 创建者ID(只读)

    public string $creatorName;    // string readOnly: true 创建者名称(只读)

    public int $createTime;//	integer($int64) readOnly: true 创建时间(只读)

    public int $registryTime; //	integer($int64) readOnly: true 激活时间

    public string $parentId;//	string 父级设备ID

    public array $features;//	[...]
    public int $modifyTime; //	integer($int64) readOnly: true 修改时间

    public string $modifierId; //	string readOnly: true 修改人ID

    public string $modifierName;//	string readOnly: true 修改人名称


}