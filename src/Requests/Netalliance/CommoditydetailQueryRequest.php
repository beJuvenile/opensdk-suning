<?php
/**
 * 推广商品详情信息接口【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.commoditydetail.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class CommoditydetailQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.commoditydetail.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCommoditydetail';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $cityCode;      // 城市编码 默认为025

    private $commodityStr;  // 格式 商品编码1-供应商编码1_商品编码2-供应商编码2... 商品编码取有效位，供应商编码左补零至10位 最大查询10个商品

    private $picWidth;      // 图片宽度 默认为200

    private $picHeight;     // 图片高度 默认为200

    private $apiParams = [];


    public function setCityCode($val)
    {
        $this->cityCode = (string)$val;
        $this->apiParams['cityCode'] = (string)$val;
    }

    public function setCommodityStr($val)
    {
        $this->commodityStr = (string)$val;
        $this->apiParams['commodityStr'] = (string)$val;
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

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}