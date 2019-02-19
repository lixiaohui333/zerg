<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18
 * Time: 9:37
 */

namespace app\api\controller\v1;


use app\lib\exception\MissException;
use app\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerById($id);
        if(!$banner){
            throw new MissException([
                'msg'=>'请求banner不存在',
            ]);
        }
        return $banner;
    }
}