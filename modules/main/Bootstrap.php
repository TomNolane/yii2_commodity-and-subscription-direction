<?php

namespace modules\main;

use Yii;

/**
 * Class Bootstrap
 * @package modules\main
 */
class Bootstrap
{
    public function __construct()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/main/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/main/messages',
            'fileMap' => [
                'modules/main/module' => 'module.php',
                'modules/main/backend' => 'backend.php',
                'modules/main/frontend' => 'frontend.php',
            ],
        ];

        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules(
            [
                // Declaration of rules here
                '' => 'main/default/index',
                '<_a:(agreement|lk|register|lk2|lk3|lk4|lk5|order|save|today-special|contact2|menu|politics|captcha|video)>' => 'main/default/<_a>',
            ]
        );
    }
}
