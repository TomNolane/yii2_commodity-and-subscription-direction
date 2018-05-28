<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Youtubege extends ActiveRecord
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
        return 'youtubege';
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
            [['id','short_url', 'title', 'description', 'author', 'duration', 'url', 'thumbnail', 'embed', 'views', 'category', 'is_show', 'sub_category', 'src'], 'required']
        ];
    }
}