<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19
 * Time: 16:44
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code=400;
    public $errorCode=10000;
    public $msg = "invalid parameters";




}