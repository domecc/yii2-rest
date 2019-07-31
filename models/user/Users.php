<?php

namespace app\models\user;

use app\models\BaseModel;

class Users extends BaseModel
{

    public static function tableName()
    {
        return '{{users}}';
    }
}