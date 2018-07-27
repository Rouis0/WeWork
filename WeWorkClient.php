<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午2:26
 */

namespace Rouis\WeWork;


use AppBundle\Service\WeWork\WeWorkException;
use Rouis\TencentApiClient;
use Rouis\TencentApiException;
use Rouis\WeWork\Message\Message;
use Rouis\WeWork\Request\TokenWeWorkRequest;
use Rouis\WeWork\Utility\CallBack\WXBizMsgCrypt;
use rayful\Tool\URL;

class WeWorkClient extends TencentApiClient
{
    /**
     * @var string $encodingAesKey
     * 企业微信回调url身份签名key
     */
    private $encodingAesKey;

    /** @var WXBizMsgCrypt $decryptor */
    private $decryptor;

    /**
     * WeWorkClient constructor.
     * @param $corpId
     * @param $corpSecret
     * @param $decryptor WXBizMsgCrypt
     */
    public function __construct($corpId, $corpSecret, $decryptor = null)
    {
        $this->decryptor = $decryptor;
        parent::__construct($corpId, $corpSecret);
    }


    /**
     * @throws TencentApiException
     */
    protected function setToken()
    {
        $request = new TokenWeWorkRequest($this->corpId, $this->corpSecret);
        $response = $this->executeRequest($request, false);
        $this->token = $response->access_token;
    }

    /**
     * @param $url string
     * @param $headers array
     * @param $body string
     * @return Message
     * @throws TencentApiException
     */
    public function parseMessage($url, $headers, $body)
    {
        $content = (array)simplexml_load_string($body, null, LIBXML_NOCDATA);
        $decryptMsg = $this->verifyAndDecryptMessage($url, $content['Encrypt']);
        $content['Encrypt'] = (array)simplexml_load_string($decryptMsg, null, LIBXML_NOCDATA);
        $event = new Message($content);
        return $event;
    }


    /**
     * 用于解密企业微信回调url的验证请求，解密类和函数使用官网提供的php实现
     * @param string $urlMeta
     * @return string
     * @throws TencentApiException
     */
    public function verifyUrl($urlMeta)
    {
        $url = new URL(urldecode($urlMeta));
        $encryptEchoStr = $url->getQuery()['echostr'];
        $result = $this->verifyAndDecryptMessage($urlMeta, $encryptEchoStr);
        return $result;
    }


    /**
     * @param $urlMeta
     * @param $encryptMessage
     * @return string
     * @throws TencentApiException
     */
    private function verifyAndDecryptMessage($urlMeta, $encryptMessage)
    {
        $resultMessage = '';
        $url = new URL(urldecode($urlMeta));
        $query = $url->getQuery();
        $verifyMsgSig = $query['msg_signature'];
        $verifyTimeStamp = $query['timestamp'];
        $verifyNonce = $query['nonce'];

//        $weworkDecrypt = new WXBizMsgCrypt($this->getToken(), $this->encodingAesKey, $this->corpId);
        // 解密签名信息，此方法会校验数字签名保证信息来源安全
        $errCode = $this->decryptor->VerifyURL($verifyMsgSig, $verifyTimeStamp, $verifyNonce, $encryptMessage, $resultMessage);
        if ($errCode == 0) {
            return $resultMessage;
        } else {
            throw new WeWorkException('消息体解密失败: ' . $errCode, $errCode);
        }
    }
}