<?php


namespace Kyzone\BIot\Device;

use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\ResponseMessageMapStringObject;

/**
 * Class DeviceOpt
 * @package Kyzone\BIot\Device
 * 设备操作API管理
 */
class DeviceOpt extends Api
{
    /**
     * 下发修改属性指令
     * @param string $deviceId ID
     * @param array $data 数据
     * @return ResponseMessageMapStringObject
     */
    public function propertiesUpdate(string $deviceId, array $data): ResponseMessageMapStringObject
    {
        $result = $this->post("/api/v1/device/opt/{$deviceId}/properties", $data);
        return new ResponseMessageMapStringObject($result);
    }

    /**
     * 下发调用功能指令
     * @param string $deviceId ID
     * @param string $functionId function
     * @param array $data 数据
     * @return ResponseMessageMapStringObject
     */
    public function optFunction(string $deviceId, string $functionId, array $data): ResponseMessageMapStringObject
    {
        $result = $this->post("/api/v1/device/opt/{$deviceId}/function/{$functionId}", $data);
        return new ResponseMessageMapStringObject($result);
    }

    /**
     * 下发读取属性指令
     * @param string $deviceId ID
     * @param string $property 属性ID
     * @return ResponseMessageMapStringObject
     */
    public function propertiesGet(string $deviceId, string $property): ResponseMessageMapStringObject
    {
        $result = $this->get("/api/v1/device/opt/{$deviceId}/property/{$property}", []);
        return new ResponseMessageMapStringObject($result);
    }
}