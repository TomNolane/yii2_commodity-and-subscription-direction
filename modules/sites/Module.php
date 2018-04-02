<?php

namespace modules\sites;

use Yii;
use yii\console\Application as ConsoleApplication;

/**
 * Class Module
 * @package modules\sites
 */
class Module extends \yii\base\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'modules\sites\controllers\backend';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
		$this->setViewPath('@modules/sites/views/backend');
    }
	
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/sites/' . $category, $message, $params, $language);
    }
}
