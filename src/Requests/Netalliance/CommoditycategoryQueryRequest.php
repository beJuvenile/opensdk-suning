<?php
/**
 * 商品类目查询【申请】
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.commoditycategory.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\Suning\Requests\Netalliance;

use OpenSDK\Suning\Interfaces\Request;
use OpenSDK\Suning\Params\Netalliance\CommoditycategoryItem;

class CommoditycategoryQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.commoditycategory.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCommoditycategory';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $commoditycategoryList = []; //

    private $apiParams = [];


    public function setCommodityCategoryList(CommoditycategoryItem $val)
    {
        $this->commoditycategoryList[] = $val->getApiParams();
        $this->apiParams['commoditycategoryList'] = $this->commoditycategoryList;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}