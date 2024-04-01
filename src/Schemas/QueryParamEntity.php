<?php


namespace Kyzone\BIot\Schemas;

use Kyzone\BIot\Base\SplBean;

class QueryParamEntity extends SplBean
{

    public array $terms;    //	[...]
    public array $includes;    //	[...]
    public array $excludes;    //	[...]
    public bool $paging;    //	boolean 是否分页
    public int $firstPageIndex;    //	integer($int32) 第一页索引
    public int $pageIndex;    //	integer($int32) 页码
    public int $pageSize;    //	integer($int32) 每页数量
    public array $sorts;    //	[...]
    public $context;    //	{...}
    public string $where;    //	string where条件表达式,与terms参数不能共存.语法: name = 张三 and age > 16
    public string $orderBy;    //	string orderBy条件表达式,与sorts参数不能共存.语法: age asc,createTime desc
    public int $total;    //	integer($int32)设置了此值后将不重复执行count查询总数
    public $filter;    //	{...}
    public bool $parallelPager;    //boolean 是否进行并行分页

}
