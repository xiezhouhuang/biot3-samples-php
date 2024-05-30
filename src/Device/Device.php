<?php


namespace Kyzone\BIot\Device;

use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\DeviceInstanceEntity;
use Kyzone\BIot\Schemas\DeviceTagEntity;
use Kyzone\BIot\Schemas\QueryParamEntity;
use Kyzone\BIot\Schemas\ResponseMessageBoolean;
use Kyzone\BIot\Schemas\ResponseMessageDeviceDetail;
use Kyzone\BIot\Schemas\ResponseMessageDeviceInstanceEntity;
use Kyzone\BIot\Schemas\ResponseMessageDeviceState;
use Kyzone\BIot\Schemas\ResponseMessageInteger;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceStateInfo;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceTagEntity;
use Kyzone\BIot\Schemas\ResponseMessageListImportDeviceInstanceResult;
use Kyzone\BIot\Schemas\ResponseMessageListInteger;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceDetail;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceInfo;
use Kyzone\BIot\Schemas\ResponseMessageVoid;

/**
 * Class Device
 * @package Kyzone\BIot\Device
 * 设备API管理
 */
class Device extends Api
{
    /**
     * 更新设备 ,如果传入了id,并且对应数据存在,则尝试覆盖,不存在则新增.
     * @param $id string ID
     * @param $data DeviceInstanceEntity 数据
     * @return ResponseMessageBoolean
     */
    public function updateDevice(string $id, DeviceInstanceEntity $data): ResponseMessageBoolean
    {
        $result = $this->put("/api/v1/device/{$id}", $data);
        return new ResponseMessageBoolean($result);
    }

    /**
     * 根据ID删除.
     * @param string $id ID
     * @return ResponseMessageDeviceInstanceEntity
     */
    public function deleteDevice(string $id): ResponseMessageDeviceInstanceEntity
    {
        $result = $this->delete("/api/v1/device/{$id}", new SplBean());
        return new ResponseMessageDeviceInstanceEntity($result);
    }

    /**
     * 更新物模型
     * @param string $id ID
     * @param string $data 数据
     * @return ResponseMessageVoid
     */
    public function updateDeviceMetadata(string $id, string $data): ResponseMessageVoid
    {
        //TODO 待定
        $result = $this->put("/api/v1/device/{$id}/metadata", new SplBean([$data]));
        return new ResponseMessageVoid($result);
    }

    /**
     * 重置物模型
     * @param string $id ID
     * @return ResponseMessageVoid
     */
    public function deleteDeviceMetadata(string $id): ResponseMessageVoid
    {
        $result = $this->delete("/api/v1/device/{$id}", new SplBean());
        return new ResponseMessageVoid($result);
    }

    /**
     * 合并产品物模型
     * @param string $id ID
     * @return ResponseMessageVoid
     */
    public function mergeProductDeviceMetadata(string $id): ResponseMessageVoid
    {

        $result = $this->put("/api/v1/device/{$id}/metadata/merge-product", new SplBean());
        return new ResponseMessageVoid($result);
    }

    /**
     * 新建设备
     * @param DeviceInstanceEntity $data 设备信息
     * @return ResponseMessageDeviceInstanceEntity
     */
    public function addDevice(DeviceInstanceEntity $data): ResponseMessageDeviceInstanceEntity
    {
        $result = $this->post("/api/v1/device", $data);
        return new ResponseMessageDeviceInstanceEntity($result);
    }

    /**
     * 同步设备状态
     * @param QueryParamEntity $params 查询条件
     * @return ResponseMessageListInteger
     */
    public function deviceStateSync(QueryParamEntity $params): ResponseMessageListInteger
    {

        $result = $this->get("/api/v1/device/state/_sync", $params);
        return new ResponseMessageListInteger($result);
    }

    /**
     * 按筛选条件同步设备状态
     * @param $params QueryParamEntity 查询条件
     * @return ResponseMessageListDeviceStateInfo
     */
    public function deviceStateSyncByQuery(QueryParamEntity $params): ResponseMessageListDeviceStateInfo
    {

        $result = $this->post("/api/v1/device/state/_sync", $params);
        return new ResponseMessageListDeviceStateInfo($result);
    }

    /**
     * 批量注销设备
     * @param array $deviceArr 删除字符串
     * @return ResponseMessageInteger
     */
    public function deviceUnDeploy(array $deviceArr): ResponseMessageInteger
    {
        //TODO
        $result = $this->post("/api/v1/device/_unDeploy", $deviceArr);
        return new ResponseMessageInteger($result);
    }

    /**
     * 动态查询列表
     * @param $params QueryParamEntity 查询条件
     * @return ResponseMessagePagerResultDeviceInfo
     */
    public function getList(QueryParamEntity $params): ResponseMessagePagerResultDeviceInfo
    {
        $result = $this->post("/api/v1/device/_query", $params);
        return new ResponseMessagePagerResultDeviceInfo($result);
    }

    /**
     * 动态查询详情
     * @param $params QueryParamEntity 查询条件
     * @return ResponseMessagePagerResultDeviceDetail
     */
    public function getDetailQuery(QueryParamEntity $params): ResponseMessagePagerResultDeviceDetail
    {
        $result = $this->post("/api/v1/device/_detail/_query", $params);
        return new ResponseMessagePagerResultDeviceDetail($result);
    }

    /**
     * 批量激活设备
     * @param $params array  字符串数组
     * @return ResponseMessageInteger
     */
    public function batchDeviceDeploy(array $params): ResponseMessageInteger
    {
        $result = $this->post("/api/v1/device/_deploy", $params);
        return new ResponseMessageInteger($result);
    }

    /**
     * 批量删除设备
     * @param array $params 字符串数组
     * @return ResponseMessageInteger
     */
    public function batchDeviceDelete(array $params): ResponseMessageInteger
    {
        $result = $this->post("/api/v1/device/_delete", $params);
        return new ResponseMessageInteger($result);
    }

    /**
     * 保存设备标签
     * @param DeviceTagEntity $params 参数
     * @return ResponseMessageListDeviceTagEntity
     */
    public function saveDeviceTag(string $deviceId, DeviceTagEntity $params): ResponseMessageListDeviceTagEntity
    {
        $result = $this->patch("/api/v1/device/{$deviceId}/tag", $params);
        return new ResponseMessageListDeviceTagEntity($result);
    }

    /**
     * 下载设备导入模板
     * @param string $productId 产品ID
     * @param string $format 文件格式,支持csv,xlsx
     * @return ResponseMessageVoid
     */
    public function deviceTemplateDownload(string $productId, string $format): ResponseMessageVoid
    {
        $result = $this->get("/api/v1/device/{$productId}/template.{$format}", []);
        return new ResponseMessageVoid($result);
    }

    /**
     * 导入设备数据并提供日记下载
     * @param string $productId 产品ID
     * @param bool $autoDeploy 自动启动
     * @param string $fileUrl 文件地址,支持csv,xlsx文件格式
     * @param int $speed Default value : 32
     * @return ResponseMessageListImportDeviceInstanceResult
     */
    public function deviceImportWithLog(string $productId, bool $autoDeploy, string $fileUrl, int $speed): ResponseMessageListImportDeviceInstanceResult
    {
        $result = $this->get("/api/v1/device/{$productId}/import/_withlog", new SplBean(compact('autoDeploy', 'fileUrl', 'speed')));
        return new ResponseMessageListImportDeviceInstanceResult($result);
    }

    /**
     * 导入设备数据
     * @param string $productId 产品ID
     * @param bool $autoDeploy 自动启动
     * @param string $fileUrl 文件地址,支持csv,xlsx文件格式
     * @param string $fileId 文件id
     * @param int $speed Default value : 32
     * @return ResponseMessageListImportDeviceInstanceResult
     */
    public function deviceImport(string $productId, bool $autoDeploy, string $fileUrl, string $fileId, int $speed): ResponseMessageListImportDeviceInstanceResult
    {
        $result = $this->get("/api/v1/device/{$productId}/import", new SplBean(compact('autoDeploy', 'fileUrl', 'fileId', 'speed')));
        return new ResponseMessageListImportDeviceInstanceResult($result);
    }

    /**
     * 按产品导出设备实例数据
     * @param string $productId 产品ID
     * @param string $format 文件格式,支持csv,xlsx
     * @param QueryParamEntity $params 条件查询
     * @return ResponseMessageVoid
     */
    public function deviceExport(string $productId, string $format, QueryParamEntity $params): ResponseMessageVoid
    {
        $result = $this->get("/api/v1/device/{$productId}/export.{$format}", $params);
        return new ResponseMessageVoid($result);
    }

    /**
     * 获取指定ID设备在线状态
     * @param string $deviceId 设备ID
     * @return ResponseMessageDeviceState
     */
    public function deviceState(string $deviceId): ResponseMessageDeviceState
    {
        $result = $this->get("/api/v1/device/{$deviceId}/state", new SplBean());
        return new ResponseMessageDeviceState($result);
    }

    /**
     * 获取设备全部标签数据
     * @param string $deviceId 设备ID
     * @return ResponseMessageListDeviceTagEntity
     */
    public function deviceTags(string $deviceId): ResponseMessageListDeviceTagEntity
    {
        $result = $this->get("/api/v1/device/{$deviceId}/tags", new SplBean());
        return new ResponseMessageListDeviceTagEntity($result);
    }

    /**
     * 获取设备详情
     * @param string $deviceId 设备ID
     * @return ResponseMessageDeviceDetail
     */
    public function deviceDetail(string $deviceId): ResponseMessageDeviceDetail
    {
        $result = $this->get("/api/v1/device/{$deviceId}/_detail", new SplBean());
        return new ResponseMessageDeviceDetail($result);
    }

    /**
     * 导出设备实例数据  此操作不支持导出设备标签和配置信息
     * @param string $format 文件格式,支持csv,xlsx
     * @param QueryParamEntity $params 条件查询
     * @return ResponseMessageVoid
     */
    public function deviceExportByQuery(string $format, QueryParamEntity $params): ResponseMessageVoid
    {
        $result = $this->get("/api/v1/device/export.{$format}", $params);
        return new ResponseMessageVoid($result);
    }

    /**
     * 删除设备标签
     * @param string $deviceId 设备ID
     * @param string $tagId 标签ID
     * @return ResponseMessageVoid
     */
    public function deleteDeviceTags(string $deviceId, string $tagId): ResponseMessageVoid
    {
        $result = $this->delete("/api/v1/device/{$deviceId}/tag/{$tagId}", new SplBean());
        return new ResponseMessageVoid($result);
    }


}