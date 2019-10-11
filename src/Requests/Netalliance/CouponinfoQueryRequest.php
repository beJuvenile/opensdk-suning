<?php
/**
 * 查询券领用情况【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.couponinfo.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class CouponinfoQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.couponinfo.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCouponinfo';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $quanUrl; // 券URL

    private $apiParams = [];


    public function setQuanUrl($val)
    {
        $this->quanUrl = (string)$val;
        $this->apiParams['quanUrl'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}