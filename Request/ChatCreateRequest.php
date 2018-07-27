<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/27/18
 * Time: 2:44 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class ChatCreateRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'post';

    const path = '/appchat/create';

    /**
     * 群成员userid
     * @var array
     * 必须
     */
    private $userlist;

    /**
     * 群名字
     * @var string
     */
    private $name;

    /**
     * 群主userid
     * @var integer
     */
    private $owner;

    /**
     * 群id
     * @var integer
     */
    private $chatid;

    /**
     * @return array
     */
    public function getUserlist()
    {
        return $this->userlist;
    }

    /**
     * @param array $userlist
     */
    public function setUserlist($userlist)
    {
        $this->userlist = $userlist;
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


}