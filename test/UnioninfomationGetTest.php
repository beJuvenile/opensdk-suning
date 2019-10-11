<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\Suning\Client;
use OpenSDK\Suning\Requests\Netalliance\UnioninfomationGetRequest;

class UnioninfomationGetTest
{

    private $appKey = '2b8c0fa419990f95568e328447d4d15';

    private $appSecret = '8b2e2b35398089ba26a2ffea3033784';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new UnioninfomationGetRequest();
        $req->setGoodsCode('10215233057');
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new UnioninfomationGetTest())();