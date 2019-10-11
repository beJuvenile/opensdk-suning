<?php
/**
 * 网络请求
 * 
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 22:24
 */
namespace OpenSDK\Suning\Libs;

class Http
{

    /**
     * Post 请求
     *
     * @param string $url // 请求地址
     * @param array $query // 查询参数
     * @param array $body // 数据
     * @param array $header // 请求头
     * @param array $option // 选项
     * @return mixed
     */
    public static function post($url, $query, $body, $header=[], $option=[])
    {
        try{
            if ($query)
                $url .= '?' . http_build_query($query);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FAILONERROR, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            if (isset($option['timeout'])) {
                curl_setopt($ch, CURLOPT_TIMEOUT, $option['timeout']);
            }
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            if ($header) {
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            }

            $resp = curl_exec($ch);
            if (curl_errno($ch))
                throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
                throw new \Exception($resp, $httpStatusCode);
            curl_close($ch);

            return $resp;
        }catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    /**
     * Get请求
     *
     * @param string $url // 请求地址
     * @param array $query // 参数
     * @param array $header // 请求头
     * @param array $option // 选项
     * @return mixed
     */
    public static function get($url, $query, $header=[], $option=[])
    {
        try{
            if ($query)
                $url = $url . '?' . http_build_query($query);

            $ch = curl_init();
            //设置选项，包括URL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            if (isset($option['timeout'])) {
                curl_setopt($ch, CURLOPT_TIMEOUT, $option['timeout']);
            }
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            if ($header) {
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            }
            //执行并获取HTML文档内容
            $resp = curl_exec($ch);

            if (curl_errno($ch))
                throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
                throw new \Exception($resp, $httpStatusCode);

            //释放curl句柄
            curl_close($ch);

            return $resp;
        }catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
    
}