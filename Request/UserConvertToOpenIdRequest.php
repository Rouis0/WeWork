<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui2
 * Date: 2018/7/19
 * Time: 下午3:36
 */

namespace Rouis\WeWork\Request;

use Rouis\Request\AbstractRequest;
use Rouis\Request\DefaultImplementation;


/**
 * Class UserConvertToOpenIdRequest
 * @package AppBundle\Service\WeWork\Request
 * 该接口使用场景为企业支付，在使用企业红包和向员工付款时，需要自行将企业微信的userid转成openid。
 * 注：需要成员使用微信登录企业微信或者关注微工作台（原企业号）才能转成openid
 */
class UserConvertToOpenIdRequest extends AbstractRequest
{
    use DefaultImplementation;

    const method = 'post';

    const path = '/user/convert_to_openid';

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