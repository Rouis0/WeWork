<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/27/18
 * Time: 2:27 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class MessageSendRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'post';

    const path = '/message/send';

    /**
     * 发送的用户
     * "UserID1|UserID2|UserID3"
     * @var string
     */
    private $touser;

    /**
     * 发送的部门
     * "PartyID1|PartyID2"
     * @var string
     */
    private $toparty;

    /**
     * 发送的标签分组
     * "TagID1 | TagID2"
     * @var string
     */
    private $totag;

    /**
     * 发送类型
     * text/image/video/voice/file/textcard/news/mpnews/miniprogram_notice
     * @var string
     */
    private $msgtype;

    /**
     * 应用id
     * @var integer
     */
    private $agentid;

    /**
     * 是否加密
     * @var int
     */
    private $safe;

    /**
     * 文本信息
     * @var array
     */
    private $text;

    /**
     * 图片信息
     * @var array
     */
    private $image;

    /**
     * 语音信息
     * @var array
     */
    private $voice;

    /**
     * 文件信息
     * @var array
     */
    private $file;

    /**
     * 文本卡片
     * @var array
     */
    private $textcard;

    /**
     * 图文消息1
     * @var array
     */
    private $news;

    /**
     * 图文消息2
     * @var array
     */
    private $mpnews;

    /**
     * 小程序消息
     * @var array
     */
    private $miniprogram_notice;


    /**
     * @return string
     */
    public function getTouser()
    {
        return $this->touser;
    }

    /**
     * @param string $touser
     */
    public function setTouser($touser)
    {
        $this->touser = $touser;
    }

    /**
     * @return string
     */
    public function getToparty()
    {
        return $this->toparty;
    }

    /**
     * @param string $toparty
     */
    public function setToparty($toparty)
    {
        $this->toparty = $toparty;
    }

    /**
     * @return string
     */
    public function getTotag()
    {
        return $this->totag;
    }

    /**
     * @param string $totag
     */
    public function setTotag($totag)
    {
        $this->totag = $totag;
    }

    /**
     * @return string
     */
    public function getMsgtype()
    {
        return $this->msgtype;
    }

    /**
     * @param string $msgtype
     */
    public function setMsgtype($msgtype)
    {
        $this->msgtype = $msgtype;
    }

    /**
     * @return int
     */
    public function getAgentid()
    {
        return $this->agentid;
    }

    /**
     * @param int $agentid
     */
    public function setAgentid($agentid)
    {
        $this->agentid = $agentid;
    }

    /**
     * @return int
     */
    public function getSafe()
    {
        return $this->safe;
    }

    /**
     * @param int $safe
     */
    public function setSafe($safe)
    {
        $this->safe = $safe;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return array
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param array $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return array
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param array $voice
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
    }

    /**
     * @return array
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param array $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function getTextcard()
    {
        return $this->textcard;
    }

    /**
     * @param array $textcard
     */
    public function setTextcard($textcard)
    {
        $this->textcard = $textcard;
    }

    /**
     * @return array
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * @param array $news
     */
    public function setNews($news)
    {
        $this->news = $news;
    }

    /**
     * @return array
     */
    public function getMpnews()
    {
        return $this->mpnews;
    }

    /**
     * @param array $mpnews
     */
    public function setMpnews($mpnews)
    {
        $this->mpnews = $mpnews;
    }

    /**
     * @return array
     */
    public function getMiniprogramNotice()
    {
        return $this->miniprogram_notice;
    }

    /**
     * @param array $miniprogram_notice
     */
    public function setMiniprogramNotice($miniprogram_notice)
    {
        $this->miniprogram_notice = $miniprogram_notice;
    }


}