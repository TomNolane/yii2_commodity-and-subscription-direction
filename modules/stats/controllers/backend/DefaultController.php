<?php

namespace modules\stats\controllers\backend;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use dominus77\sweetalert2\Alert;
use modules\rbac\models\Permission;
use modules\stats\Module;
use backend\models\Visitors;
/**
 * Class DefaultController
 * @package modules\stats\controllers\backend
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
        $dateTime = strtotime('- 0 day');
        $dateTime = date('Y-m-d', $dateTime);
        $visitors = Visitors::find()->where('DATE(`date`) = :date', [':date'=> $dateTime])->all();
        $dateTime = strtotime('- 0 day');
        $dateTime = date('d-m-Y', $dateTime);
        return $this->render('index',['visitors'=>$visitors, 'dt' => $dateTime]);
    }
}
