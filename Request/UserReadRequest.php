<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午3:09
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class UserReadRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/get';

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