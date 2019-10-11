<?php
/**
 * 商品类目查询
 *
 * @link https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.commoditycategory.query
 *
 * User: Ken.Zhang
 * Date: 2019/9/30
 * Time: 10:04
 */
namespace OpenSDK\Suning\Params\Netalliance;


class CommoditycategoryItem
{

    private $parentId;  // 父类目ID

    private $grade;     // 查询采购目录层级（1、2、3）

    private $apiParams = [];


    public function setParentId($val)
    {
        $this->parentId = (string)$val;
        $this->apiParams['parentId'] = (string)$val;
    }

    public function setGrade($val)
    {
        $this->grade = (string)$val;
        $this->apiParams['grade'] = (string)$val;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

}