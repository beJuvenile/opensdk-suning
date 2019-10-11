<?php
/**
 * 快手商品推广接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.channelcommodity.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class ChannelcommodityGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.channelcommodity.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getChannelcommodity';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $visitUrl;  // 商品链接

    private $channelCode;   // 机构推客码

    private $custNum;   // 联盟推客码

    private $backUrl;   // 返回标识

    private $apiParams = [];


    public function setVisitUrl($val)
    {
        $this->visitUrl = (string)$val;
        $this->apiParams['visitUrl'] = (string)$val;
    }

    public function setChannelCode($val)
    {
        $this->channelCode = (string)$val;
        $this->apiParams['channelCode'] = (string)$val;
    }

    public function setCustNum($val)
    {
        $this->custNum = (string)$val;
        $this->apiParams['custNum'] = (string)$val;
    }

    public function setBackUrl($val)
    {
        $this->backUrl = (string)$val;
        $this->apiParams['backUrl'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}