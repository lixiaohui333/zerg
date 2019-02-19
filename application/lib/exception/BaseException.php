<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19
 * Time: 15:56
 */

namespace app\lib\exception;



class BaseException extends \Exception
{
    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode =999;
    public $requestUrl;

    public $shouldToClient = true;

    public function __construct($params=[])
    {
        if(!is_array($params)){
            return ;
        }

        if(array_key_exists('code',$params)){
            $this->code= $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this->errorCode=$params['errorCode'];
        }
        if(array_key_exists('$requestUrl',$params)){
            $this->requestUrl=$params['requestUrl'];
        }

    }

}