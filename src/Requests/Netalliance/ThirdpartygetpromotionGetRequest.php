<?php
/**
 * 第三方平台获取联盟短链参数接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.thirdpartygetpromotion.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class ThirdpartygetpromotionGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.thirdpartygetpromotion.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getThirdpartygetpromotion';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $outerId;   // 前10位商户编码，后18位商品编码

    private $subUser;   // 推广子会员

    private $channel;   // 推广渠道

    private $apiParams = [];


    public function setOuterId($val)
    {
        $this->outerId = (string)$val;
        $this->apiParams['outerId'] = (string)$val;
    }

    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = (string)$val;
    }

    public function setChannel($val)
    {
        $this->channel = (string)$val;
        $this->apiParams['channel'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}