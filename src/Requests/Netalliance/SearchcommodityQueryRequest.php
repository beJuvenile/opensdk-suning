<?php
/**
 * 关键字商品查询接口【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.searchcommodity.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class SearchcommodityQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.searchcommodity.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'querySearchcommodity';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pageIndex;     // 页码 默认为1

    private $keyword;       // 关键字

    private $saleCategoryCode;  // 销售目录ID

    private $cityCode;      // 城市编码 默认025

    private $suningService; // 是否苏宁自营 默认为空，1：是

    private $pgSearch;      // 是否拼购 默认为空 1：是

    private $startPrice;    // 开始价格

    private $endPrice;      // 结束价格

    private $sortType;      // 排序规则 1：综合（默认） 2：销量由高到低 3：价格由高到低 4：价格由低到高 5：佣金比例由高到低
                            // 6：佣金金额由高到低 7：两个维度，佣金金额由高到低，销量由高到低

    private $picWidth;      // 图片宽度 默认200

    private $picHeight;     // 图片高度 默认200

    private $size;          // 每页条数 默认10

    private $branch;        // 1：减枝 2：不减枝 sortType=1（综合） 默认不剪枝 其他排序默认剪枝

    private $apiParams = [];


    public function setPageIndex($val)
    {
        $this->pageIndex = (int)$val;
        $this->apiParams['pageIndex'] = (int)$val;
    }

    public function setKeyword($val)
    {
        $this->keyword = (string)$val;
        $this->apiParams['keyword'] = (string)$val;
    }

    public function setSaleCategoryCode($val)
    {
        $this->saleCategoryCode = (int)$val;
        $this->apiParams['saleCategoryCode'] = (int)$val;
    }

    public function setCityCode($val)
    {
        $this->cityCode = (string)$val;
        $this->apiParams['cityCode'] = (string)$val;
    }

    public function setSuningService($val)
    {
        $this->suningService = (int)$val;
        $this->apiParams['suningService'] = (int)$val;
    }

    public function setPgSearch($val)
    {
        $this->pgSearch = (int)$val;
        $this->apiParams['pgSearch'] = (int)$val;
    }

    public function setStartPrice($val)
    {
        $this->startPrice = (float)$val;
        $this->apiParams['startPrice'] = (float)$val;
    }

    public function setEndPrice($val)
    {
        $this->endPrice = (float)$val;
        $this->apiParams['endPrice'] = (float)$val;
    }

    public function setSortType($val)
    {
        $this->sortType = (int)$val;
        $this->apiParams['sortType'] = (int)$val;
    }

    public function setPicWidth($val)
    {
        $this->picWidth = (int)$val;
        $this->apiParams['picWidth'] = (int)$val;
    }

    public function setPicHeight($val)
    {
        $this->picHeight = (int)$val;
        $this->apiParams['picHeight'] = (int)$val;
    }

    public function setSize($val)
    {
        $this->size = (int)$val;
        $this->apiParams['size'] = (int)$val;
    }

    public function setBranch($val)
    {
        $this->branch = (int)$val;
        $this->apiParams['branch'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}