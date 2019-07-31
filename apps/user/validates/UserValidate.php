<?php

namespace app\apps\user\validates;

use app\components\code\Code;

class UserValidate extends BaseValidate
{

    protected function getRules($name)
    {
        $rules = [
            'Login' => [
                ['username', 'required', 'message' => Code::FORMAT_ERROR],
                ['username', 'string', 'min' => 5, 'max' => 50, 'tooShort' => Code::PARAMS_INVALID, 'tooLong' => Code::PARAMS_INVALID],
            ]
        ];
        return $rules[$name] ?? [];
    }

    /**
     * 参数校验
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/29 22:01
     * @param $name
     * @param $data
     * @return array
     */
    public function checkParams($name, $data)
    {
        return parent::checkParams($name, $data);
    }
}