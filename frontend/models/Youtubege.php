<?php

namespace frontend\models;

use Yii;
use Yii\base\Model;
use yii\db\ActiveRecord;

class Youtubege extends ActiveRecord
{
    public static function getDb()
    { 
        return \Yii::$app->db2;  
    }

    public static function tablesName()
    {
        return 'Youtubege';
    }
}