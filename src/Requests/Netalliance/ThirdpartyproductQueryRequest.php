<?php
/**
 * 第三方联盟链接添加推广商品接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.thirdpartyproduct.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class ThirdpartyproductQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.thirdpartyproduct.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryThirdpartyproduct';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $detailUrl; // 商详页链接

    private $statParam; // 子会员编码(不能含= &这个两个符号)

    private $apiParams = [];


    public function setDetailUrl($val)
    {
        $this->detailUrl = (string)$val;
        $this->apiParams['detailUrl'] = (string)$val;
    }

    public function setStatParam($val)
    {
        $this->statParam = (string)$val;
        $this->apiParams['statParam'] = (string)$val;
    }
    
    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}