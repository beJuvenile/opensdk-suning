# opensdk-suning

#### 介绍
本类库是对苏宁开放平台API的封装  
接口文档请参见 [苏宁开放平台](https://open.suning.com/)

#### 使用示例  
- 接口调用示例  
~~~
require 'vendor/autoload.php';
  
use OpenSDK\Suning\Client;  
use OpenSDK\Suning\Requests\Netalliance\CouponproductQueryRequest;  
  
$c = new Client();  
$c->appKey = 'You are appKey';  
$c->appSecret = 'You are appSecret';  
$req = new CouponproductQueryRequest();  
$req->setPageNo(1);  
$req->setPageSize(10);  
$req->setPositionId('1');  
$c->setRequest($req);  
$result = $c->execute();  
  
var_dump($result);
~~~
  
- 授权示例  
~~~
require 'vendor/autoload.php';  
  
use OpenSDK\Suning\OauthClient;  
  
$c = new OauthClient();  
$c->appKey = 'You are appKey';  
$c->appSecret = 'You are appSecret';  
// 获取网页授权链接  
// $result = $c->buildWebAuthorizeUri();  
// 获取APP授权链接  
$result = $c->buildAppAuthorizeUri();  
// 使用code换取access token  
$result = $c->getAccessToken('6fd98f88ab5243d6b8f7b2779488c3aa');  
  
var_dump($result);
~~~