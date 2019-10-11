<?php
/**
 * 签名
 * 
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 22:13
 */
namespace OpenSDK\Suning\Libs;

class Signer
{

    /**
     * 生成签名
     *
     * @param array $data // 数据
     * @return string
     */
    public static function make($data)
    {
        $stringToBeSigned = '';
        foreach ($data as $k => $v)
        {
            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$v";
            }
        }
        unset($k, $v);

        return strtolower(md5($stringToBeSigned));
    }
    
}