<?php

namespace modules\sites;

use Yii;

/**
 * Class Bootstrap
 * @package modules\sites
 */
class Bootstrap
{
    public function __construct()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/sites/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/sites/messages',
            'fileMap' => [
                'modules/sites/module' => 'module.php',
                'modules/sites/backend' => 'backend.php',
            ],
        ];

        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules(
            [
                // Declaration of rules here
                'sites' => 'sites/default/index',
                //'<_a:(agreement|lk|lk2|lk3|lk4|order|save|politics|about|contact|captcha)>' => 'main/default/<_a>',
            ]
        );
    }
}
