<?php
/**
 * 获取优惠券商品
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.couponproduct.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class CouponproductQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.couponproduct.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCouponproduct';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pageNo;    // 页码

    private $pageSize;  // 每页条数

    private $positionId;// 推广位ID

    private $apiParams = [];


    public function setPageNo($val)
    {
        $this->pageNo = (int)$val;
        $this->apiParams['pageNo'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->pageSize = (int)$val;
        $this->apiParams['pageSize'] = (int)$val;
    }

    public function setPositionId($val)
    {
        $this->positionId = (string)$val;
        $this->apiParams['positionId'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}