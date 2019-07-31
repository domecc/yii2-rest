<?php
namespace app\models;

use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    public function init()
    {
        parent::init();
    }
}