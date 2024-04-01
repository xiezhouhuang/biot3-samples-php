<?php


namespace Kyzone\BIot\Alarm;


use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\AlarmHandleInfo;
use Kyzone\BIot\Schemas\QueryParamEntity;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceProperty;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultAlarmHandleHistoryEntity;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultAlarmHistoryInfo;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultAlarmRecordEntity;
use Kyzone\BIot\Schemas\ResponseMessageVoid;

class Alarm extends Api
{

    /**
     * 告警处理历史
     * @param QueryParamEntity $data 条件
     * @return ResponseMessagePagerResultAlarmHandleHistoryEntity
     */
    public function recordHandleHistory(QueryParamEntity $data): ResponseMessagePagerResultAlarmHandleHistoryEntity
    {
        return $this->post("/api/v1/alarm/record/handle-history/_query", $data);
    }

    /**
     * 使用POST分页动态查询
     * @param QueryParamEntity $data 条件
     * @return ResponseMessagePagerResultAlarmRecordEntity
     */
    public function recordQuery(QueryParamEntity $data): ResponseMessagePagerResultAlarmRecordEntity
    {
        return $this->post("/api/v1/alarm/record/_query", $data);
    }

    /**
     * 处理告警
     * @param AlarmHandleInfo $data 数据
     * @return ResponseMessageVoid
     */
    public function recordHandle(AlarmHandleInfo $data): ResponseMessageVoid
    {
        return $this->post("/api/v1/alarm/record/_handle", $data);
    }

    /**
     * 告警历史查询
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultAlarmHistoryInfo
     */
    public function historyQuery(QueryParamEntity $data): ResponseMessagePagerResultAlarmHistoryInfo
    {
        return $this->post("/api/v1/alarm/history/_query", $data);
    }
}