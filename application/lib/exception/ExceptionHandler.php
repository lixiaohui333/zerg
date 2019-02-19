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
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{

    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {

        $request = Request::instance();

        if($e instanceof BaseException ){
            $result = [
                'errorCode'=>$e->errorCode,
                'msg'=>$e->msg,
                'requestUrl'=>$request->baseUrl(),
            ];
            $this->code = $e->code;

        }else {

            if(config('app_debug')){
                return parent::render($e);
            }

            $this->recordErrorLog($e);
            $result = [
                'errorCode'=>999,
                'msg'=>'sorry，we make a mistake. (^o^)Y',
                'requestUrl'=>$request->baseUrl(),
            ];
            $this->code = 500;
        }
         return json($result,$this->code);
    }

    private function recordErrorLog(Exception $e){
        Log::init([
            'type'=> 'File',
            'path'=> LOG_PATH,
            'level'=>['error']
        ]);

        Log::record($e->getMessage(),"error");

    }
}