<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\Suning\Client;
use OpenSDK\Suning\Requests\Netalliance\CouponproductQueryRequest;

class CouponproductQueryTest
{

    private $appKey = '2b8c0fa419990f95568e328447d4d15';

    private $appSecret = '8b2e2b35398089ba26a2ffea3033784';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new CouponproductQueryRequest();
        $req->setPageNo(1);
        $req->setPageSize(10);
        $req->setPositionId('1');
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new CouponproductQueryTest())();