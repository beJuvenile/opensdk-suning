<?php
/**
 * 商品和券二合一（小程序）
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.appletextensionlink.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;

class AppletextensionlinkGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.appletextensionlink.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getAppletextensionlink';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $productUrl;    // 商详页链接

    private $quanUrl;       // 券URL

    private $subUser;       // 子会员id

    private $promotionId;   // 推广位ID

    private $apiParams = [];


    public function setProductUrl($val)
    {
        $this->productUrl = (string)$val;
        $this->apiParams['productUrl'] = (string)$val;
    }

    public function setQuanUrl($val)
    {
        $this->quanUrl = (string)$val;
        $this->apiParams['quanUrl'] = (string)$val;
    }

    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = (string)$val;
    }

    public function setPromotionId($val)
    {
        $this->promotionId = (string)$val;
        $this->apiParams['promotionId'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}