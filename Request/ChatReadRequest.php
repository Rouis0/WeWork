<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/27/18
 * Time: 2:44 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class ChatReadRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/appchat/get';

    /**
     * 群id
     * @var integer
     * 必须
     */
    private $chatid;

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