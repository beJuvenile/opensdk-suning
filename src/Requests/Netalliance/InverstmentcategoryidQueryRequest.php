<?php
/**
 * 高佣专区类目查询接口【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.inverstmentcategoryid.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class InverstmentcategoryidQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.inverstmentcategoryid.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryInverstmentcategoryid';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $apiParams = [];

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}