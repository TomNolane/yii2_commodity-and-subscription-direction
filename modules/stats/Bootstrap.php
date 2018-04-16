<?php

namespace modules\stats;

use Yii;

/**
 * Class Bootstrap
 * @package modules\stats
 */
class Bootstrap
{
    public function __construct()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/stats/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/stats/messages',
            'fileMap' => [
                'modules/stats/module' => 'module.php',
                'modules/stats/backend' => 'backend.php',
            ],
        ];

        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules(
            [
                // Declaration of rules here
                'stats' => 'stats/default/index',
                //'<_a:(agreement|lk|lk2|lk3|lk4|order|save|politics|about|contact|captcha)>' => 'main/default/<_a>',
            ]
        );
    }
}
