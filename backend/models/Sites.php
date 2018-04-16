<?php

namespace backend\models;

use Yii;
use Yii\base\Model;
use yii\db\ActiveRecord;

class Sites extends ActiveRecord
{
    public static function getDb()
    { 
        return \Yii::$app->db2;  
    }

    public static function tablesName()
    {
        return 'sites';
    }
}