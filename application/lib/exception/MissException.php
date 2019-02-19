<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19
 * Time: 16:04
 */

namespace app\lib\exception;


class MissException extends BaseException
{
    public $code=404;
    public $msg = "global:your required resource are not found";
    public $errorCode = 0 ;
}