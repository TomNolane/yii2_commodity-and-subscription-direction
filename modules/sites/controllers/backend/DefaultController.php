<?php

namespace modules\sites\controllers\backend;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use dominus77\sweetalert2\Alert;
use modules\rbac\models\Permission;
use modules\sites\Module;

/**
 * Class DefaultController
 * @package modules\sites\controllers\backend
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => [Permission::PERMISSION_VIEW_ADMIN_PAGE],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
