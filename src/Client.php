<?php
/**
 * 客户端
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 20:54
 */
namespace OpenSDK\Suning;

use OpenSDK\Suning\Libs\Format;
use OpenSDK\Suning\Libs\Http;
use OpenSDK\Suning\Interfaces\Request;
use OpenSDK\Suning\Libs\Signer;

class Client
{

    /**
     * 接口地址
     *
     * @var string
     */
    public $gateway = 'https://open.suning.com/api/http/sopRequest';

    /**
     * 超时时间
     *
     * @var int
     */
    public $timeout = 5;

    /**
     * AppKey
     *
     * @var string
     */
    public $appKey;

    /**
     * AppSecret
     *
     * @var string
     */
    public $appSecret;

    /**
     * API协议版本号，默认为V1，可不填
     */
    public $version = 'v1.2';

    /**
     * 数据类型
     *
     * @var string
     */
    public $format = 'json';

    /**
     * request对象
     * 
     * @var object
     */
    public $request;

    /**
     * Access Token
     *
     * @var string
     */
    public $accessToken;

    /**
     * 请求时间
     *
     * @var string
     */
    public $requestTime;

    /**
     * SDK版本
     *
     * @var string
     */
    public $sdkVersion = 'v1.2';

    /**
     * User-Agent
     *
     * @var string
     */
    public $ua = 'suning-sdk-php';



    public function __construct($appKey='', $appSecret='')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->requestTime = date('Y-m-d H:i:s');
    }
    
    /**
     * 设置请求对象
     * 
     * @param Request $request
     * @param string $accessToken
     */
    public function setRequest(Request $request, $accessToken='')
    {
        $this->request = $request;
        $this->accessToken = $accessToken;
    }

    /**
     * 执行
     *
     * @return mixed
     */
    public function execute()
    {
        $params = $this->request->getParams();

        if (!$params)
            $params = '';
        $params = [
            'sn_request' => [
                'sn_body' => [
                    $this->request->bizName => $params
                ]
            ]
        ];

        $header = $this->generateHeader($params);

        $option = [
            'timeout' => $this->timeout,
        ];

        if (strtolower($this->request->requestType)=='post') {
            $result = Http::post($this->gateway . '/' . $this->request->method, [], $params, $header, $option);
        } else {
            $result = Http::get($this->gateway . '/' . $this->request->method, $params, $header, $option);
        }

        return strtolower($this->format)=='json' ? Format::deJSON($result) : Format::deSimpleXML($result);
    }

    /**
     * 生成请求头
     *
     * @param array $params // 业务参数
     * @return array
     */
    private function generateHeader($params)
    {
        // 组装头文件信息
        $headers = [
            'Content-Type: text/xml; charset=utf-8',
            'AppMethod: ' . $this->request->method,
            'AppRequestTime: ' . $this->requestTime,
            'Format: ' . $this -> format,
            'signInfo: ' . $this->sign($params),
            'AppKey: ' . $this->appKey,
            'VersionNo: ' . $this->version,
            'User-Agent: ' . $this->ua,
            'Sdk-Version: ' . $this->sdkVersion
        ];

        if ($this->accessToken)
            $headers[] = 'access_token: ' . $this->accessToken;

        return $headers;
    }

    /**
     * 签名
     *
     * @param array $params // 业务参数
     * @return string
     */
    private function sign($params)
    {
        return Signer::make([
            'secret_key'  => $this->appSecret,
            'method'      => $this->request->method,
            'date'        => $this->requestTime,
            'app_key'     => $this -> appKey,
            'api_version' => $this->version,
            'post_field'  => base64_encode(json_encode($params)),
        ]);
    }


}