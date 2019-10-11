<?php
/**
 * 获取自定义推广链接接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.custompromotionurl.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class CustompromotionurlQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.custompromotionurl.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCustompromotionurl';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $adBookId;  // 推广位id

    private $visitUrl;  // 需要定制的链接(允许定制商品，店铺，频道及活动促销页面，其它页面暂不支持定制)

    private $apiParams = [];


    public function setAdBookId($val)
    {
        $this->adBookId = (string)$val;
        $this->apiParams['adBookId'] = (string)$val;
    }

    public function setVisitUrl($val)
    {
        $this->visitUrl = (string)$val;
        $this->apiParams['visitUrl'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}