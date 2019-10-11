<?php
/**
 * 获取首页推广权限的推广位链接
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.homepagepositionurl.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class HomepagepositionurlQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.homepagepositionurl.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryHomepagepositionurl';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $subUser; // 子会员编码

    private $apiParams = [];


    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}