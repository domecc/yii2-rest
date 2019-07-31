<?php
/**
 * 登录
 *
 * @file    Login.php
 * @author  wubang
 * @date    2019/7/30 10:29
 * @version 1.0
 * Create by wubang <domewubang@gmail.com>
 */

namespace app\apps\user\actions\user;

use app\components\code\Code;
use app\utils\ResponseUtils\ResponseUtil;
use yii\base\Action;

class Login extends Action
{

    public function run()
    {
        $query  = \Yii::$app->request->get();
        $code = $this->controller->validator->checkParams(__CLASS__, $query);
        if ($code !== Code::NO_ERROR) {
            return ResponseUtil::responseByCode($code);
        }
        // 2 choose 1
        return ResponseUtil::responseByCode(Code::NO_ERROR);
//        return ResponseUtil::responseByCodeAndData(Code::NO_ERROR, ['count' => 0, 'lists' => []]);
    }
}