<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/27/18
 * Time: 2:44 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class ChatUpdateRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'post';

    const path = '/appchat/update';

    /**
     * 群id
     * @var integer
     * 必须
     */
    private $chatid;

    /**
     * 新增群员群成员userid
     * @var array
     */
    private $add_user_list;

    /**
     * 删除群员群成员userid
     * @var array
     */
    private $del_user_list;

    /**
     * 新群名字
     * @var string
     */
    private $name;

    /**
     * 新群主userid
     * @var integer
     */
    private $owner;

    /**
     * @return int
     */
    public function getChatid()
    {
        return $this->chatid;
    }

    /**
     * @param int $chatid
     */
    public function setChatid($chatid)
    {
        $this->chatid = $chatid;
    }

    /**
     * @return array
     */
    public function getAddUserList()
    {
        return $this->add_user_list;
    }

    /**
     * @param array $add_user_list
     */
    public function setAddUserList($add_user_list)
    {
        $this->add_user_list = $add_user_list;
    }

    /**
     * @return array
     */
    public function getDelUserList()
    {
        return $this->del_user_list;
    }

    /**
     * @param array $del_user_list
     */
    public function setDelUserList($del_user_list)
    {
        $this->del_user_list = $del_user_list;
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
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param int $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }


}