<?php
/**
 * Created by PhpStorm.
 * User: xiyanghui
 * Date: 7/24/18
 * Time: 2:21 PM
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\DefaultImplementation;

class QrUserReadRequest extends AbstractWeWorkRequest
{
    use DefaultImplementation;

    const method = 'get';

    const path = '/user/getuserinfo';

    private $code;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

}