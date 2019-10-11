<?php
/**
 * 获取商品或店铺推广链接接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.storepromotionurl.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class StorepromotionurlQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.storepromotionurl.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryStorepromotionurl';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $adBookId;  // 推广位id

    private $commCode;  // 商品编码 如果商品编码不为空，则生成商品推广链接，否则生成店铺推广链接

    private $mertCode;  // 商家编码 10位数字

    private $urlType;   // url类型 1:长链接 2:短链接

    private $subUser;   // 子会员id

    private $apiParams = [];


    public function setAdBookId($val)
    {
        $this->adBookId = (string)$val;
        $this->apiParams['adBookId'] = (string)$val;
    }

    public function setCommCode($val)
    {
        $this->commCode = (string)$val;
        $this->apiParams['commCode'] = (string)$val;
    }

    public function setMertCode($val)
    {
        $this->mertCode = (string)$val;
        $this->apiParams['mertCode'] = (string)$val;
    }

    public function setUrlType($val)
    {
        $this->urlType = (int)$val;
        $this->apiParams['urlType'] = (int)$val;
    }

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