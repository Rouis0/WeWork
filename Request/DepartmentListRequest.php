<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/19/18
 * Time: 3:09 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class DepartmentListRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const path = '/department/list';

    const method = 'get';

    /**
     * 部门id。获取指定部门及其下的子部门。id为1时可获取根部门下的子部门。如果不填，默认获取全量组织架。
     * 必须：否
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