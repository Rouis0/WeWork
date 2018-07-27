<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/19/18
 * Time: 3:09 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class DepartmentUpdateRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const path = '/department/update';

    const method = 'post';

    /**
     * 部门id
     * 必须
     * @var int
     */
    private $id;

    /**
     * 部门名称。长度限制为1~32个字节，字符不能包括\:*?"<>｜
     * @var string
     */
    private $name;

    /**
     * 父部门id。
     * @var int
     */
    private $parentid;

    /**
     * 在父部门中的次序值。order值大的排序靠前。有效的值范围是[0, 2^32)
     * @var int
     */
    private $order;

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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * @param int $parentid
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

}