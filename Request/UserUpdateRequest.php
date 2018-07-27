<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午3:17
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class UserUpdateRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'post';

    const path = '/user/update';

    /** requirement */

    private $userid;

    private $name;

    /** @var array
     * 部门ID列表，最多20个
     */
    private $department;

    /** optional */

    /**
     * 部门内的排序值，默认为0，成员次序以创建时间从小到大排列。数量必须和department一致，数值越大排序越前面。有效的值范围是[0, 2^32)
     */
    private $order;

    /**
     * 职位信息。长度为0~128个字符
     */
    private $position;

    private $gender;

    private $email;

    private $isleader;

    /**
     * 成员头像的mediaid，通过素材管理接口上传图片获得的mediaid
     */
    private $avatar_mediaid;

    /**
     * 座机。由1-32位的纯数字或’-‘号组成。
     */
    private $telephone;

    /**
     * 企业内必须唯一，mobile/email二者不能同时为空
     */
    private $mobile;

    /**
     * @var bool
     * 启用/禁用成员。1表示启用成员，0表示禁用成员
     */
    private $enable;

    private $english_Name;

    /**
     * 自定义字段。自定义字段需要先在WEB管理端添加，见扩展属性添加方法，否则忽略未知属性的赋值。自定义字段长度为0~32个字符，超过将被截断
     */
    private $extattr;

    /**
     * @var bool
     * 是否邀请该成员使用企业微信（将通过微信服务通知或短信或邮件下发邀请，每天自动下发一次，最多持续3个工作日），默认值为true。
     */
    private $to_invite;

    /**
     * 成员对外属性，字段详情见对外属性
     */
    private $external_profile;

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param array $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getIsleader()
    {
        return $this->isleader;
    }

    /**
     * @param mixed $isleader
     */
    public function setIsleader($isleader)
    {
        $this->isleader = $isleader;
    }

    /**
     * @return mixed
     */
    public function getAvatarMediaid()
    {
        return $this->avatar_mediaid;
    }

    /**
     * @param mixed $avatar_mediaid
     */
    public function setAvatarMediaid($avatar_mediaid)
    {
        $this->avatar_mediaid = $avatar_mediaid;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
    }

    /**
     * @return mixed
     */
    public function getEnglishName()
    {
        return $this->english_Name;
    }

    /**
     * @param mixed $english_Name
     */
    public function setEnglishName($english_Name)
    {
        $this->english_Name = $english_Name;
    }

    /**
     * @return mixed
     */
    public function getExtattr()
    {
        return $this->extattr;
    }

    /**
     * @param mixed $extattr
     */
    public function setExtattr($extattr)
    {
        $this->extattr = $extattr;
    }

    /**
     * @return bool
     */
    public function isToInvite()
    {
        return $this->to_invite;
    }

    /**
     * @param bool $to_invite
     */
    public function setToInvite($to_invite)
    {
        $this->to_invite = $to_invite;
    }

    /**
     * @return mixed
     */
    public function getExternalProfile()
    {
        return $this->external_profile;
    }

    /**
     * @param mixed $external_profile
     */
    public function setExternalProfile($external_profile)
    {
        $this->external_profile = $external_profile;
    }


}