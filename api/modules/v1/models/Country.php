<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Country extends ActiveRecord
{
    public static function getDb()
    { 
        return \Yii::$app->db2;  
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Country';
    }
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['code'];
    }
    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }
}