<?php
/**
 * Web应用授权
 *
 * @link https://open.suning.com/ospos//apipage/toDocContent.do?menuId=36
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/26
 * Time: 20:54
 */
namespace OpenSDK\Suning;

use OpenSDK\Suning\Libs\Format;
use OpenSDK\Suning\Libs\Http;

class OauthClient
{

    /**
     * 接口地址
     *
     * @var string
     */
    public $gateway = 'https://open.suning.com/api/oauth';

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
     * 回调地址
     *
     * @var string
     */
    public $redirectUri;

    /**
     * 版本ID
     *
     * @var int
     */
    public $itemCode;


    public function __construct($appKey='', $appSecret='', $redirectUri='')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->redirectUri = $redirectUri;
    }


    /**
     * Web授权链接
     *
     * @return string
     */
    public function buildWebAuthorizeUri()
    {
        return "{$this->gateway}/authorize?client_id={$this->appKey}&response_type=code&redirect_uri={$this->redirectUri}&itemcode={$this->itemCode}";
    }

    /**
     * App授权链接
     */
    public function buildAppAuthorizeUri()
    {
        return "{$this->gateway}/authorize?response_type=code&client_id={$this->appKey}&redirect_uri={$this->redirectUri}&itemcode={$this->itemCode}";
    }

    /**
     * 换取Access Token
     *
     * @param string $code // 授权码
     * @return array
     */
    public function getAccessToken($code)
    {
        try{
            $params = [
                'client_id'     => $this->appKey,
                'client_secret' => $this->appSecret,
                'code'          => $code,
                'grant_type'    => 'authorization_code',
                'redirect_uri'  => $this->redirectUri,
            ];

            $response = Http::post($this->gateway . '/token', $params);

            return Format::deJSON($response);
        }catch (\Exception $e) {
            return [];
        }
    }




}