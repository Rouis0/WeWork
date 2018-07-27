<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/19/18
 * Time: 3:06 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class DepartmentDeleteRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const path = '/department/delete';

    const method = 'get';

    /**
     * 部门id。（注：不能删除根部门；不能删除含有子部门、成员的部门）
     * 必须
     * @var int
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}