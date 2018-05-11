<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sites".
 *
 * @property string $site
 * @property string $senpuls
 * @property string $metrika
 * @property string $facebook
 * @property string $google_analytics
 * @property string $adwords
 * @property string $yandex_rtb
 * @property int $enable
 */
class Sites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site'], 'required'],
            [['senpuls', 'metrika', 'facebook', 'google_analytics', 'adsense', 'yandex_rtb', 'white', 'grey'], 'string'],
            [['enable'], 'integer'],
            [['utm_enable'], 'integer'],
            [['site'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site' => 'Сайты',
            'senpuls' => 'Senpuls',
            'metrika' => 'Яндекс Метрика',
            'facebook' => 'Facebook pixel',
            'google_analytics' => 'Google Analytics',
            'adsense' => 'Adwords',
            'yandex_rtb' => 'Yandex Rtb',
            'enable' => 'Включен',
            'white' => 'Белая',
            'grey' => 'Серая',
            'utm_enable' => 'UTM включено'
        ];
    }

    /**
     * @inheritdoc
     * @return SitesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SitesQuery(get_called_class());
    }
}
