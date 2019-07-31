<?php

namespace app\apps\user\validates;

use app\components\code\Code;
use yii\base\DynamicModel;
use yii\base\InvalidConfigException;
use yii\base\UnknownPropertyException;

class BaseValidate extends DynamicModel
{
    // 自定义消息包含：min,max,length 时，需要使用tooShort与tooLong 自定义消息
    protected function getRules($name)
    {
        // todo 通用规则
    }

    /**
     * 检查参数
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/31 17:29
     * @param $name
     * @param $data
     * @return 0|int
     */
    public function checkParams($name, $data)
    {
        try {
            $name      = $this->getClassName($name);
            $rules     = $this->getRules($name);
            $validator = $this->validateData($data, $rules);
            if ($validator->hasErrors()) {
                $error = $validator->getFirstErrors();
                $code  = array_values($error)[0];
                return $code;
            }
            return Code::NO_ERROR;
        } catch (UnknownPropertyException $exception) {
            return Code::PARAMS_MISSING;
        } catch (InvalidConfigException $exception) {
            return Code::PARAMS_INVALID;
        } finally {
            return Code::PARAMS_ERROR;
        }
    }

    /**
     * 获取方法名
     *
     * Author wubang <domewubang@gmail.com>
     * Date 2019/7/31 17:28
     * @param      $className
     * @param bool $hasNamespace
     * @return string
     */
    public function getClassName($className, $hasNamespace = false)
    {
        if (empty($className)) {
            return '';
        }
        if ($hasNamespace) {
            return $className;
        }
        return basename(str_replace('\\', '/', $className));
    }
}