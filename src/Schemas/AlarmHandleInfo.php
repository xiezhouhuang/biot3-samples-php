<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class AlarmHandleInfo extends SplBean
{
    public string $alarmRecordId;//	string 告警记录ID

    public string $alarmConfigId;//	string 告警ID

    public int $alarmTime;//	integer($int64) 告警时间

    public string $describe;//	string 处理说明

    public int $handleTime;//	integer($int64) 处理时间

    public string $type;//	string 处理类型Enum:[ {text=系统, value=system}, {text=人工, value=user} ]
    public string $state;//	string 处理后的状态 Enum: [ {text=告警中, value=warning}, {text=无告警, value=normal} ]

}