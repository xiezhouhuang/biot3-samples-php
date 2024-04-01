<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class DeviceOperationLogEntity extends SplBean
{


    public string $id; //	string日志ID

    public string $deviceId; //	string设备ID

    public string $productId; //	string产品ID

    /**
     * @var $type
     * [ {text=事件上报, value=event},
     * {text=读取属性, value=readProperty},
     * {text=修改属性, value=writeProperty},
     * {text=修改属性回复, value=writePropertyReply},
     * {text=属性上报, value=reportProperty},
     * {text=读取属性回复, value=readPropertyReply},
     * {text=子设备消息, value=child},
     * {text=子设备消息回复, value=childReply},
     * {text=调用功能, value=functionInvoke},
     * {text=调用功能回复, value=functionReply},
     * {text=设备注册, value=register},
     * {text=设备注销, value=unregister},
     * {text=日志, value=log},
     * {text=标签更新, value=tag},
     * {text=离线, value=offline},
     * {text=上线, value=online},
     * {text=其它, value=other} ]
     */
    public string $type; //	string日志类型

    public int $createTime; //	integer($int64)创建时间

    public array $content; //	{...}
    public string $messageId; //	string消息ID

    public int $timestamp; //	integer($int64) 数据时间

}