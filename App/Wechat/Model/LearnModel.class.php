<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/7
 * Time: 20:07
 */
namespace Wechat\Model;
use Think\Model;
class LearnModel extends Model{

    /*
     * 1、接入) URL:开发者用来接收微信消息和事件的接口URL
               Token：可由开发者可以任意填写，用作生成签名（该Token会和接口URL中包含的Token进行比对，从而验证安全性
               EncodingAESKey由开发者手动填写或随机生成，将用作消息体加解密密钥

       2、验证请求：开发者提交信息后，微信服务器将发送GET请求到填写的服务器地址URL上，GET请求携带四个参数：
               signature：微信加密签名，signature结合了开发者填写的token参数和请求中的timestamp参数、nonce参数。
               timestamp：时间戳
               nonce：随机数
               echostr：随机字符串
     */
    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    /*
     * access_token是公众号的全局唯一票据，公众号调用各接口时都需使用access_token。开发者需要进行妥善保存。
     * access_token的存储至少要保留512个字符空间
     * access_token的有效期目前为2个小时
     * */

}