<?php
/**
 * 网盟订单信息批量查询
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.order.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class OrderQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.order.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryOrder';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pageNo;    // 页码

    private $pageSize;  // 每页条数

    private $startTime; // 查询开始时间。格式:yyyy-MM-dd HH:mm:ss，若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于1天

    private $endTime;   // 查询结束时间。格式:yyyy-MM-dd HH:mm:ss，若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于1天

    private $orderLineStatus;   // 订单行项目状态（0：全部状态；1：等待付款；2：支付完成；3：退款；4：订单已取消）

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

    public function setStartTime($val)
    {
        $this->startTime = (string)$val;
        $this->apiParams['startTime'] = (string)$val;
    }

    public function setEndTime($val)
    {
        $this->endTime = (string)$val;
        $this->apiParams['endTime'] = (string)$val;
    }

    public function setOrderLineStatus($val)
    {
        $this->orderLineStatus = (int)$val;
        $this->apiParams['orderLineStatus'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}