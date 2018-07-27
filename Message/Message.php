<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/23
 * Time: 上午11:06
 */

namespace Rouis\WeWork\Message;


class Message
{
    /**
     * @var array
     * 解密成array的Encrypt字段
     */
    protected $content;

    /**
     * @var string $toUserName
     * 企业微信的CorpID，当为第三方套件回调事件时，CorpID的内容为suiteid
     */
    protected $toUserName;

    /**
     * @var string $agentId
     * 接收的应用id，可在应用的设置页面获取
     */
    protected $agentId;

    /**
     * AbstractEvent constructor.
     * @param $content array
     */
    public function __construct($content)
    {
        $this->toUserName = $content['ToUserName'];
        $this->agentId = $content['AgentID'];
        $this->content = $content['Encrypt'];
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getToUserName()
    {
        return $this->toUserName;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }
}