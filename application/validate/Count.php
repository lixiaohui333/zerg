<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 11:32
 */

namespace app\validate;


class Count extends BaseValidate
{
        protected $rule = [
            'count' => 'isPositiveInteger|between:1,15',
        ];
}