<?php
/**
 * 小编推荐商品查询接口【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.recommendcommodity.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class RecommendcommodityQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.recommendcommodity.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryRecommendcommodity';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pageIndex; // 页码 默认为0

    private $cityCode;  // 城市编码 默认为025

    private $picWidth;  // 图片宽度 默认为200

    private $picHeight; // 图片高度 默认为200

    private $size;      // 每页条数 默认10

    private $apiParams = [];


    public function setPageIndex($val)
    {
        $this->pageIndex = (int)$val;
        $this->apiParams['pageIndex'] = (int)$val;
    }

    public function setCityCode($val)
    {
        $this->cityCode = (string)$val;
        $this->apiParams['cityCode'] = (string)$val;
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

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}