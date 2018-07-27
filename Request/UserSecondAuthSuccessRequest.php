<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui2
 * Date: 2018/7/19
 * Time: 下午3:41
 */

namespace Rouis\WeWork\Request;
use Rouis\Request\AbstractRequest;
use Rouis\Request\DefaultImplementation;


/**
 * Class UserSecondAuthSuccessRequest
 * @package AppBundle\Service\WeWork\Request
 * 企业在开启二次验证时，必须在管理端填写企业二次验证页面的url。
 *当成员登录企业微信或关注微工作台（原企业号）加入企业时，会自动跳转到企业的验证页面。
 * 在跳转到企业的验证页面时，会带上如下参数：code=CODE。
 * 企业收到code后，使用“通讯录同步助手”调用“根据code获取成员信息”接口获取成员的userid。
 * 然后在验证成员信息成功后，调用如下接口即可让成员成功加入企业。
 */
class UserSecondAuthSuccessRequest extends AbstractRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/authsucc';

    /** requirement */

    private $userid;

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


}