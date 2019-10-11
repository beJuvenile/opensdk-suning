<?php
/**
 * 高佣专区商品查询接口【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.inverstmentcommodity.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class InverstmentcommodityQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.inverstmentcommodity.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryInverstmentcommodity';

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

    private $categoryId;// 高佣类目ID 默认为第一个类目

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

    public function setCategoryId($val)
    {
        $this->categoryId = (int)$val;
        $this->apiParams['categoryId'] = (int)$val;
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