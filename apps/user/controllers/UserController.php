<?php
/**
 * UserController.php UTF-8
 * 用户控制器
 *
 *
 * @date    : 2019-02-18 16:24
 *
 * @license 这不是一个自由软件，未经授权不许任何使用和传播。
 * @author  : wubang <domewubang@gmail.com>
 * @version : user 1.0
 */

namespace app\apps\user\controllers;

use app\apps\user\validates\UserValidate;

class UserController extends BaseController
{

    /**
     * @var UserValidate
     */
    public $validator;

    public function init()
    {
        parent::init();
        $this->validator = new UserValidate();
    }

    public function actions()
    {
        $actions = [
            'login' => 'app\apps\user\actions\user\Login'
        ];
        return $actions;
    }

    public function verbs()
    {
        $verbs = [
            'login' => ['GET', 'POST'],
        ];
        return $verbs;
    }

}