<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;


class Recipe extends ActiveRecord
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
        return 'recipe';
    }
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }
    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id','name', 'image', 'post_author', 'ingredients', 'summary_list', 'recipe', 'tags', 'isshow', 'url'], 'required']
        ];
    }
}