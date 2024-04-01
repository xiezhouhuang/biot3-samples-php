<?php


namespace Kyzone\BIot\Product;


use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\AggRequest;
use Kyzone\BIot\Schemas\DeviceProductEntity;
use Kyzone\BIot\Schemas\QueryParamEntity;
use Kyzone\BIot\Schemas\ResponseMessageBoolean;
use Kyzone\BIot\Schemas\ResponseMessageDeviceProductEntity;
use Kyzone\BIot\Schemas\ResponseMessageInteger;
use Kyzone\BIot\Schemas\ResponseMessageListConfigMetadata;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceDataStorePolicyInfo;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceMetadataCodec;
use Kyzone\BIot\Schemas\ResponseMessageListMapStringObject;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceProductEntity;
use Kyzone\BIot\Schemas\ResponseMessagePagerResultDeviceProperties;
use Kyzone\BIot\Schemas\ResponseMessageString;
use Kyzone\BIot\Schemas\ResponseMessageValidationResult;
use Kyzone\BIot\Schemas\ResponseMessageVoid;


/**
 * 产品API管理
 * Class Product
 * @Product Kyzone\BIot\Product
 */
class Product extends Api
{
    /**
     * 保存数据 如果传入了id,并且对应数据存在,则尝试覆盖,不存在则新增.
     * @param string $productId 产品ID
     * @param DeviceProductEntity $data 数据
     * @return ResponseMessageBoolean
     */
    public function editProduct(string $productId, DeviceProductEntity $data): ResponseMessageBoolean
    {
        $result = $this->put("/api/v1/device/product/{$productId}", $data);
        return new ResponseMessageBoolean($result);

    }

    /**
     * 新增单个数据 并返回新增的数据
     * @param DeviceProductEntity $data 数据
     * @return ResponseMessageDeviceProductEntity
     */
    public function addProduct(DeviceProductEntity $data): ResponseMessageDeviceProductEntity
    {
        $result = $this->post("/api/v1/device/product", $data);
        return new ResponseMessageDeviceProductEntity($result);

    }

    /**
     * 解析文件为属性物模型
     * @param string $productId
     * @param string $fileUrl 文件地址,支持csv,xlsx文件格式
     * @return ResponseMessageString
     */
    public function propertyMetaDataImport(string $productId, string $fileUrl): ResponseMessageString
    {
        $result = $this->post("/api/v1/device/product/{$productId}/property-metadata/import", new SplBean(compact("fileUrl")));
        return new ResponseMessageString($result);
    }

    /**
     * 查询设备的全部属性(一个属性一列) 产品使用列式存储模式才支持
     * @param string $productId
     * @param QueryParamEntity $query 查询条件
     * @return ResponseMessagePagerResultDeviceProperties
     */
    public function propertiesQuery(string $productId, QueryParamEntity $query): ResponseMessagePagerResultDeviceProperties
    {
        $result = $this->post("/api/v1/device/product/{$productId}/properties/_query", $query);
        return new ResponseMessagePagerResultDeviceProperties($result);
    }

    /**
     * 注销产品
     * @param string $productId
     * @return ResponseMessageInteger
     */
    public function productUndeploy(string $productId): ResponseMessageInteger
    {
        $result = $this->post("/api/v1/device/product/{$productId}/undeploy", new SplBean());
        return new ResponseMessageInteger($result);
    }

    /**
     * 激活产品
     * @param string $productId
     * @return ResponseMessageInteger
     */
    public function productDeploy(string $productId): ResponseMessageInteger
    {
        $result = $this->post("/api/v1/device/product/{$productId}/deploy", new SplBean());
        return new ResponseMessageInteger($result);
    }

    /**
     * 聚合查询产品下设备属性
     * @param string $productId
     * @param AggRequest $data
     * @return ResponseMessageListMapStringObject
     */
    public function productAggQuery(string $productId, AggRequest $data): ResponseMessageListMapStringObject
    {
        $result = $this->post("/api/v1/device/product/{$productId}/agg/_query", $data);
        return new ResponseMessageListMapStringObject($result);
    }

    /**
     * 转换指定的物模型格式为平台的物模型
     * @param string $id ID
     * @param string $data
     * @return ResponseMessageString
     */
    public function productMetadataConvertFrom(string $id, string $data): ResponseMessageString
    {
        $result = $this->post("/api/v1/device/product/metadata/convert-from/{$id}", new SplBean([$data]));
        return new ResponseMessageString($result);
    }

    /**
     * 分页动态查询
     * @param QueryParamEntity $query 查询条件
     * @return ResponseMessagePagerResultDeviceProductEntity
     */
    public function productQuery(QueryParamEntity $query): ResponseMessagePagerResultDeviceProductEntity
    {
        $result = $this->post("/api/v1/device/product/_query", $query);
        return new ResponseMessagePagerResultDeviceProductEntity($result);
    }

    /**
     * 使用pOST分页动态查询 不返回总数 此操作不返回分页总数,如果需要获取全部数据,请设置参数paging=false
     * @param QueryParamEntity $query 查询条件
     * @return ResponseMessagePagerResultDeviceProductEntity
     */
    public function productQueryNoPaging(QueryParamEntity $query): ResponseMessagePagerResultDeviceProductEntity
    {
        $result = $this->post("/api/v1/device/product/_query/no-paging", $query);
        return new ResponseMessagePagerResultDeviceProductEntity($result);
    }

    /**
     * 下载产品物模型导入模块
     * @param string $productId 产品ID
     * @param string $format 文件格式,支持csv,xlsx
     * @return ResponseMessageVoid
     */
    public function productPropertyMetadataDownload(string $productId, string $format): ResponseMessageVoid
    {
        $result = $this->get("/api/v1/device/product/{$productId}/property-metadata/template.{$format}", new SplBean());
        return new ResponseMessageVoid($result);
    }

    /**
     * 根据指定的接入方式获取产品需要的配置定义信息
     * @param string $id 产品ID
     * @param string $accessId 接入方式ID
     * @return ResponseMessageListConfigMetadata
     */
    public function productAccessConfigMetadata(string $id, string $accessId): ResponseMessageListConfigMetadata
    {
        $result = $this->get("/api/v1/device/product/{$id}/{$accessId}/config-metadata", new SplBean());
        return new ResponseMessageListConfigMetadata($result);
    }

    /**
     * 验证产品ID是否存在
     * @param string $id 产品ID
     * @return ResponseMessageBoolean
     */
    public function productExists(string $id): ResponseMessageBoolean
    {
        $result = $this->get("/api/v1/device/product/{$id}/exists", new SplBean());
        return new ResponseMessageBoolean($result);
    }

    /**
     * 获取产品需要的配置定义信息
     * @param string $id 产品ID
     * @return ResponseMessageListConfigMetadata
     */
    public function productConfigMetadata(string $id): ResponseMessageListConfigMetadata
    {
        $result = $this->get("/api/v1/device/product/{$id}/config-metadata", new SplBean());
        return new ResponseMessageListConfigMetadata($result);
    }

    /**
     * 获取产品物模型的扩展配置定义
     * @param string $id 产品ID
     * @return ResponseMessageListConfigMetadata
     */
    public function productConfigMetadataType(string $id, string $metadataType, string $metadataId, string $typeId): ResponseMessageListConfigMetadata
    {
        $result = $this->get("/api/v1/device/product/{$id}/config-metadata/{$metadataType}/{$metadataId}/{$typeId}", new SplBean());
        return new ResponseMessageListConfigMetadata($result);
    }

    /**
     * 获取支持的数据存储策略
     * @return ResponseMessageListDeviceDataStorePolicyInfo
     */
    public function productStoragePolicies(): ResponseMessageListDeviceDataStorePolicyInfo
    {
        $result = $this->get("/api/v1/device/product/storage/policies", new SplBean());
        return new ResponseMessageListDeviceDataStorePolicyInfo($result);
    }

    /**
     * 获取支持的物模型格式
     * @return ResponseMessageListDeviceMetadataCodec
     */
    public function productMetadataCodecs(): ResponseMessageListDeviceMetadataCodec
    {
        $result = $this->get("/api/v1/device/product/metadata/codecs", new SplBean());
        return new ResponseMessageListDeviceMetadataCodec($result);
    }

    /**
     * 验证id是否合法
     * @param string $id ID
     * @return ResponseMessageValidationResult
     */
    public function productValidate(string $id): ResponseMessageValidationResult
    {
        $result = $this->get("/api/v1/device/product/id/_validate", new SplBean([compact('id')]));
        return new ResponseMessageValidationResult($result);
    }
}