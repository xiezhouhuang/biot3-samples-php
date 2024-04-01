<?php


namespace Kyzone\BIot\Product;


use Kyzone\BIot\Base\SplBean;
use Kyzone\BIot\Core\Api;
use Kyzone\BIot\Schemas\DeviceProductEntity;
use Kyzone\BIot\Schemas\QueryParamEntity;
use Kyzone\BIot\Schemas\ResponseMessageBoolean;
use Kyzone\BIot\Schemas\ResponseMessageListDeviceCategoryEntity;

/**
 * 产品分类API管理
 * Class ProductCategory
 * @Product Kyzone\BIot\Product
 */
class ProductCategory extends Api
{
    /**
     * 获取全部分类(树结构)
     * @param QueryParamEntity $data 数据
     * @return ResponseMessageListDeviceCategoryEntity
     */
    public function categoryTree(QueryParamEntity $data): ResponseMessageListDeviceCategoryEntity
    {
        $result = $this->post("/api/v1/device/category/_tree", $data);
        return new ResponseMessageListDeviceCategoryEntity($result);
    }

}