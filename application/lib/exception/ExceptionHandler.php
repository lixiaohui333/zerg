<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 16:38
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;

class ExceptionHandler extends Handle
{
    public function render(Exception $e)
    {
        return json(['msg'=>'error']);
    }
}