<?php

namespace app\components\exceptions;

use yii\base\ErrorHandler;

class Handler extends ErrorHandler
{

    public function renderException($exception)
    {
        if (YII_DEBUG) {
            $code  = $exception->getCode();
            $line  = $exception->getLine();
            $msg   = $exception->getMessage();
            $trace = $exception->getTraceAsString();
            echo <<<CONTENT
$code
$line
$msg
$trace
CONTENT;
//            return parent::renderException($exception);
        } else {
            // todo 增加生产环境错误处理
        }
    }
}
