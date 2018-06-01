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
        $i18n->translations['*'] = [
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
                // 'sites' => 'sites/default/index',
                // 'update' => 'sites/default/update',
                // 'view' => 'sites/default/view',

                '<_a:(index|update|view|update|view|create|_form|_search)>' => 'sites/default/<_a>',
            ]
        );
    }
}
