<?php


namespace Kyzone\BIot\Schemas;


class PagerResultAlarmRecordEntity
{
    public int $pageIndex;

    public int $pageSize;

    public int $total;
    public array $data; // AlarmRecordEntity


}