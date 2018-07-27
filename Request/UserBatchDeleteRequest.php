<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午3:26
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class UserBatchDeleteRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/batchdelete';

    /** requirement */

    /**
     * @var array
     * 成员UserID列表。对应管理端的帐号。最多支持200个。若存在无效UserID，直接返回错误
     */
    private $useridlist;

    /**
     * @return array
     */
    public function getUseridlist()
    {
        return $this->useridlist;
    }

    /**
     * @param array $useridlist
     */
    public function setUseridlist($useridlist)
    {
        $this->useridlist = $useridlist;
    }

}