<?php

namespace frontend\models;

use Yii;
use Yii\base\Model;
use yii\db\ActiveRecord;

class Youtube2 extends ActiveRecord
{
    public static function getDb()
    { 
        return \Yii::$app->db2;  
    }

    public static function tablesName()
    {
        return 'Youtube2';
    }
}