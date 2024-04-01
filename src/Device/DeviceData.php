<?php


namespace Kyzone\BIot\Device;

use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\AggregationRequest;
use Kyzone\BIot\Schemas\DeviceInstanceEntity;
use Kyzone\BIot\Schemas\DeviceTagEntity;
use Kyzone\BIot\Schemas\QueryParamEntity;
use Kyzone\BIot\Schemas\ResponseMessageBoolean;
use Kyzone\BIot\Schemas\ResponseMessageDeviceDetail;
use Kyzone\BIot\Schemas\ResponseMessageDeviceInstanceEntity;
use Kyzone\BIot\Schemas\ResponseMessageDeviceState;
use Kyzone\BIot\Schemas\ResponseMessageInteger;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceProperty;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceStateInfo;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceTagEntity;
use Kyzone\BIot\Schemas\ResponseMessageListImportDeviceInstanceResult;
use Kyzone\BIot\Schemas\ResponseMessageListInteger;
use Kyzone\BIot\Schemas\ResponseMessageListMapStringObject;
use Kyzone\BIot\Schemas\ResponseMessageMapStringObject;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceDetail;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceEvent;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceInfo;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceOperationLogEntity;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceProperty;
use Kyzone\BIot\Schemas\ResponseMessageVoid;

/**
 * Class DeviceData
 * @package Kyzone\BIot\Device
 * 设备数据API管理
 */
class DeviceData extends Api
{
    /**
     * 获取设备的每一个属性
     * @param string $deviceId ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessageListDeviceProperty
     */
    public function propertiesQueryEachOne(string $deviceId, QueryParamEntity $data): ResponseMessageListDeviceProperty
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/properties/_query_each_one", $data);
        return new ResponseMessageListDeviceProperty($result);
    }

    /**
     * 设备日记查询
     * @param string $deviceId ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultDeviceOperationLogEntity
     */
    public function logQuery(string $deviceId, QueryParamEntity $data): ResponseMessagePagerResultDeviceOperationLogEntity
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/log/_query", $data);
        return new ResponseMessagePagerResultDeviceOperationLogEntity($result);
    }

    /**
     * 查询设备事件数据
     * 根据物模型的不同,返回对应的字段,如果物模型定义为Object类型,则对应属性,否则value字段则为事件数据.
     * @param string $deviceId ID
     * @param string $eventId 事件ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultDeviceEvent
     */
    public function eventQuery(string $deviceId, string $eventId, QueryParamEntity $data): ResponseMessagePagerResultDeviceEvent
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/event/{$eventId}/_query", $data);
        return new ResponseMessagePagerResultDeviceEvent($result);
    }

    /**
     * 查询设备事件格式数据
     * 查询设备事件数据,并对数据进行格式化.格式化对字段统一为原字段加上_format后缀.
     * @param string $deviceId ID
     * @param string $eventId 事件ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultDeviceEvent
     */
    public function eventQueryFormat(string $deviceId, string $eventId, QueryParamEntity $data): ResponseMessagePagerResultDeviceEvent
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/event/{$eventId}/_query/_format", $data);
        return new ResponseMessagePagerResultDeviceEvent($result);
    }

    /**
     * 聚合查询设备属性
     * @param string $deviceId ID
     * @param string $property 属性ID
     * @param string $agg 聚合类型
     * @param AggregationRequest $data 数据
     * @return ResponseMessageListMapStringObject
     */
    public function aggQuery(string $deviceId, string $property, string $agg, AggregationRequest $data): ResponseMessageListMapStringObject
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/agg/{$agg}/{$property}/_query", $data);
        return new ResponseMessageListMapStringObject($result);
    }


    /**
     * GET 查询设备指定属性列表
     * @param string $deviceId ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultDeviceProperty
     */
    public function propertiesQuery(string $deviceId, QueryParamEntity $data): ResponseMessagePagerResultDeviceProperty
    {
        $result = $this->get("/api/v1/device/data/{$deviceId}/properties/_query", $data);
        return new ResponseMessagePagerResultDeviceProperty($result);
    }

    /**
     * POST 查询设备指定属性列表
     * @param string $deviceId ID
     * @param QueryParamEntity $data 数据
     * @return ResponseMessagePagerResultDeviceProperty
     */
    public function propertiesQueryPost(string $deviceId, QueryParamEntity $data): ResponseMessagePagerResultDeviceProperty
    {
        $result = $this->post("/api/v1/device/data/{$deviceId}/properties/_query", $data);
        return new ResponseMessagePagerResultDeviceProperty($result);
    }

    /**
     * 获取设备最新的全部属性
     * @param string $deviceId ID
     * @return ResponseMessageListDeviceProperty
     */
    public function propertiesLatest(string $deviceId): ResponseMessageListDeviceProperty
    {
        $result = $this->get("/api/v1/device/data/{$deviceId}/properties/_latest", new SplBean());
        return new ResponseMessageListDeviceProperty($result);
    }


}