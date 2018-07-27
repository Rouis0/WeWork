<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午1:35
 */

namespace Rouis\WeWork\Request;




use Rouis\Request\TokenRequestTrait;

class TokenWeWorkRequest extends AbstractWeWorkRequest
{
    use TokenRequestTrait;

    const method = 'get';

    const path = '/gettoken';

}