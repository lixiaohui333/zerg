<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 11:32
 */

namespace app\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    /**
     *
     */
    public function goCheck(){

        $request = Request::instance();
        $params = $request->param();
//        $params['token']
        if(!$this->check($params)){
            throw new Exception($this->error);
        }

        return true;
    }

    protected function isPositiveInteger($value, $rule='', $data='', $field='')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        return $field . '必须是正整数';
    }

}