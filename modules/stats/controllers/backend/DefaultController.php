<?php

namespace modules\stats\controllers\backend;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use dominus77\sweetalert2\Alert;
use modules\rbac\models\Permission;
use modules\stats\Module;
use backend\models\Visitors;
use backend\models\Sites;
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
    public function actionIndex($date = '', $bot_enable = 'false')
    {
        if(empty($date)) $date = strtotime(date('Y-m-d'));
        else $date = strtotime(date($date));
           
        $dateTime = strtotime('- 0 day',$date);
        $dateTime = date('Y-m-d', $dateTime);
        $visitors0 = Visitors::find()->select('ip, useragent,site,country,is_mobile,is_bot')->where('DATE(`date`) = :date', [':date'=> $dateTime])->all();
        $visitors = Visitors::find()->where('DATE(`date`) = :date', [':date'=> $dateTime])->all();
        $dateTime = strtotime('- 0 day',$date);
        $dateTime = date('d F', $dateTime); 
        
        return $this->render('index',['visitors'=>$visitors, 'visitors0'=>$visitors0, 'dt' => $dateTime, 'bot_enable' => $bot_enable, 'sites' => Sites::find()->all()]);
    }
}
