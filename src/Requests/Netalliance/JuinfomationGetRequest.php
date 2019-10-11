<?php
/**
 * 单笔查询大聚会商品信息
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.juinfomation.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class JuinfomationGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.juinfomation.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getJuInfomation';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $commCode; // 商品编码

    private $apiParams = [];


    public function setCommCode($val)
    {
        $this->commCode = (string)$val;
        $this->apiParams['commCode'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}