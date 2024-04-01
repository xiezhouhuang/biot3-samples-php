<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class AlarmHandleHistoryEntity extends SplBean
{

    public string $id;//	string id

    public string $alarmId;//string 告警配置ID

    public string $alarmRecordId;//string 告警记录Id

    public string $handleType;//	string 告警处理类型 Enum: [ {text=系统, value=system}, {text=人工, value=user} ]
    public string $description;//	string 说明

    public int $handleTime;//	integer($int64) 处理时间

    public int $alarmTime;//	integer($int64) 告警时间

    public string $creatorId;//	string readOnly: true 创建者ID(只读)

    public int $createTime;//	integer($int64) readOnly: true 创建时间(只读)

    public string $creatorName;//	string writeOnly: true
}