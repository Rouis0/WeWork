<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui2
 * Date: 2018/7/19
 * Time: 下午3:34
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class UserListRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/list';

    /** requirement */

    /**
     * 获取的部门id
     */
    private $department_id;

    /** optional */

    /**
     * @var bool
     * 1/0：是否递归获取子部门下面的成员
     */
    private $fetch_child;

    /**
     * @return mixed
     */
    public function getDepartmentId()
    {
        return $this->department_id;
    }

    /**
     * @param int $department_id
     */
    public function setDepartmentId($department_id)
    {
        $this->department_id = $department_id;
    }

    /**
     * @return bool
     */
    public function isFetchChild()
    {
        return $this->fetch_child;
    }

    /**
     * @param int $fetch_child
     */
    public function setFetchChild($fetch_child)
    {
        $this->fetch_child = $fetch_child;
    }


}