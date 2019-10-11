<?php
/**
 * 联盟会员校验接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.unionmember.confirm
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class UnionmemberConfirmRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.unionmember.confirm';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'confirmUnionmember';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $custNum; // 订单编号

    private $apiParams = [];


    public function setCustNum($val)
    {
        $this->custNum = (string)$val;
        $this->apiParams['custNum'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}