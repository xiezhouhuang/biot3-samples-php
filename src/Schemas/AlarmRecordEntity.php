<?php


namespace Kyzone\BIot\Schemas;


class AlarmRecordEntity
{
    public string $id;

    public string $alarmConfigId;

    public string $alarmName;

    public string $targetType;

    public string $targetId;
    public string $targetKey;

    public string $targetName;

    public string $sourceType;

    public string $sourceId;

    public string $sourceName;

    public int $alarmTime;
    public int $handleTime;

    public int $level;

    public string $state;  //[ {text=告警中, value=warning}, {text=无告警, value=normal} ]

    public string $description;
}