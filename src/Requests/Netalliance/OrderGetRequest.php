<?php
/**
 * 网盟订单信息单独查询
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.order.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class OrderGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.order.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getOrder';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $orderCode; // 订单编号

    private $apiParams = [];


    public function setOrderCode($val)
    {
        $this->orderCode = (string)$val;
        $this->apiParams['orderCode'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}