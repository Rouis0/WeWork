<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午3:30
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class UserSimpleListRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/simplelist';

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
     * @param mixed $department_id
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
     * @param bool $fetch_child
     */
    public function setFetchChild($fetch_child)
    {
        $this->fetch_child = $fetch_child;
    }

}