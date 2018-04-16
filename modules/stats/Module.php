<?php

namespace modules\stats;

use Yii;
use yii\console\Application as ConsoleApplication;

/**
 * Class Module
 * @package modules\stats
 */
class Module extends \yii\base\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'modules\stats\controllers\backend';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
		$this->setViewPath('@modules/stats/views/backend');
    }
	
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/stats/' . $category, $message, $params, $language);
    }
}
