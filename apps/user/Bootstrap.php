<?php

namespace app\apps\user;

use yii\base\Module;

class Bootstrap extends Module
{

    public function init()
    {
        $controllerName            = $this->getUniqueId();
        $this->controllerNamespace = 'app\\apps\\' . $controllerName . '\controllers';
        parent::init();
    }
}