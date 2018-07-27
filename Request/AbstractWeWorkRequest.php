<?php
/**
 * Created by PhpStorm.
 * User: bluehead
 * Date: 2018/7/19
 * Time: 上午11:16
 */

namespace Rouis\WeWork\Request;


use Rouis\Request\AbstractRequest;

abstract class AbstractWeWorkRequest extends AbstractRequest
{
    const root = 'https://qyapi.weixin.qq.com/cgi-bin';
}