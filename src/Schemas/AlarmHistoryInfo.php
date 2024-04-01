<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class AlarmHistoryInfo extends SplBean
{
    public string $id;//string 告警数据ID

    public string $alarmConfigId;//	string 告警配置ID

    public string $alarmConfigName;//	string 告警配置名称

    public string $alarmRecordId;//string 告警记录ID

    public int $level;//integer($int32) 告警级别

    public string $description;//	string 说明

    public int $alarmTime;//	integer($int64) 告警时间

    public string $targetType;//	string 告警目标类型

    public string $targetName;//	string 告警目标名称

    public string $targetId;//	string 告警目标Id

    public string $sourceType;//	string 告警源类型

    public string $sourceId;//	string 告警源Id

    public string $sourceName;//	string 告警源名称

    public string $alarmInfo;//	string 告警信息

    public array $bindings;//	[...]

}