<?php
/**
 * 单个查询联盟商品信息
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.unioninfomation.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class UnioninfomationGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.unioninfomation.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getUnionInfomation';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $goodsCode; // 商品ID

    private $apiParams = [];


    public function setGoodsCode($val)
    {
        $this->goodsCode = (string)$val;
        $this->apiParams['goodsCode'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}