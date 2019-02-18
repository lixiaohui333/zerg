<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 15:46
 */

namespace app\api\model;


use think\Exception;

class Banner
{
    public static function getBannerById($id){

        $value=1/$id;

        return $value;
    }
}