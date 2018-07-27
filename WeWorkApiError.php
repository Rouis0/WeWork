<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 下午2:26
 */

namespace Rouis\WeWork;



use Rouis\TencentApiException;

class WeWorkApiError extends TencentApiException
{
    public function __construct($code, $message)
    {
        parent::__construct($code, $message);
    }
}