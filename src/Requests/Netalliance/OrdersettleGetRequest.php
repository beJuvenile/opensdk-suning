<?php
/**
 * 网盟订单结算信息查询
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.ordersettle.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class OrdersettleGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.ordersettle.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getOrderSettle';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $orderLineNumber; // OMS订单行项目号（如果输入多个，英文逗号隔开，最多输入100个）

    private $apiParams = [];


    public function setOrderLineNumber($val)
    {
        $this->orderLineNumber = (string)$val;
        $this->apiParams['orderLineNumber'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}