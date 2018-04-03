<?php

namespace modules\main\controllers\frontend;

use Yii;
use yii\web\Controller;
use modules\main\models\frontend\ContactForm;
use modules\main\Module;

/**
 * Class DefaultController
 * @package modules\main\controllers\frontend
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     * @return array
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);

    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor' => 0xF1F1F1,
                'foreColor' => 0xEE7600,
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    { 
        if(strpos($_SERVER['SERVER_NAME'], 'vladimir-blog') !== false)
            return $this->render('vladimir-blog');
        elseif(strpos($_SERVER['SERVER_NAME'], 'lol-surprise-lp') !== false) 
            return $this->render('ems-trainer');
        elseif(strpos($_SERVER['SERVER_NAME'], 'ems-trainer-ron') !== false) 
            return $this->render('ems-trainer-ron');
        elseif(strpos($_SERVER['SERVER_NAME'], 'ems-trainer') !== false)
            return $this->render('ems-trainer18');
        elseif(strpos($_SERVER['SERVER_NAME'], 'cosmo-stars') !== false)
            return $this->render('cosmo-stars');
        elseif(strpos($_SERVER['SERVER_NAME'], '198-fatcap5') !== false)
            return $this->render('198-fatcap5');
        elseif(strpos($_SERVER['SERVER_NAME'], '198-fatcap9') !== false)
            return $this->render('198-fatcap9');
        elseif(strpos($_SERVER['SERVER_NAME'], 'ecoslim6') !== false)
            return $this->render('ecoslim6');
        elseif(strpos($_SERVER['SERVER_NAME'], 'ecoslim-inst') !== false)
            return $this->render('ecoslim-inst');
        elseif(strpos($_SERVER['SERVER_NAME'], 'fire-fit-one9') !== false)
            return $this->render('fire-fit-one9');
        elseif(strpos($_SERVER['SERVER_NAME'], 'fire-fit-one3') !== false)
            return $this->render('fire-fit-one3');
        elseif(strpos($_SERVER['SERVER_NAME'], 'blogsnew') !== false)
            return $this->render('blogsnew');
        elseif(strpos($_SERVER['SERVER_NAME'], 'erectilecream-netnova') !== false)
            return $this->render('erectilecream-netnova');
        elseif(strpos($_SERVER['SERVER_NAME'], 'zdorov-potency') !== false)
            return $this->render('zdorov-potency');
        elseif(strpos($_SERVER['SERVER_NAME'], 'zdorov-parasites') !== false)
            return $this->render('zdorov-parasites'); 
        elseif(strpos($_SERVER['SERVER_NAME'], 'gardenin') !== false)
            return $this->render('gardenin'); 
		elseif(strpos($_SERVER['SERVER_NAME'], 'musiconline') !== false)
            return $this->render('musiconline'); 
		elseif(strpos($_SERVER['SERVER_NAME'], 'videolife') !== false)
            return $this->render('videolife'); 
		elseif(strpos($_SERVER['SERVER_NAME'], 'onlinerabota') !== false)
            return $this->render('onlinerabota'); 
		elseif(strpos($_SERVER['SERVER_NAME'], 'helpjob') !== false)
            return $this->render('helpjob'); 
        elseif(strpos($_SERVER['SERVER_NAME'], 'rabotavsem') !== false)
            return $this->render('rabotavsem');
        elseif(strpos($_SERVER['SERVER_NAME'], 'rabotarus') !== false)
            return $this->render('rabotarus');
        else
            return $this->render('vladimir-blog'); //
    }

    /**
     * Displays contact page.
     *
     * @return mixed|\yii\web\Response
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if (Yii::$app->user->isGuest)
            $model->scenario = $model::SCENARIO_GUEST;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->processSendEmail($model);
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * @param ContactForm $model
     * @return \yii\web\Response
     */
    protected function processSendEmail($model)
    {
        if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('success', Module::t('module', 'Thank you for contacting us. We will respond to you as soon as possible.'));
        } else {
            Yii::$app->session->setFlash('error', Module::t('module', 'There was an error sending email.'));
        }
        return $this->refresh();
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionOrder()
    {
        return $this->render('order');
    }

    /**
     * Displays politics page.
     *
     * @return mixed
     */
    public function actionPolitics()
    {
        return $this->render('politics'); 
    } 

    /**
     * Displays agreement page.
     *
     * @return mixed
     */
    public function actionAgreement()
    {
        return $this->render('agreement'); 
    }
	
	/**
     * Displays seestats page.
     *
     * @return mixed
     */
    public function actionSeestats()
    {
        return $this->render('seestats'); 
    }

    /**
     * Displays lk page.
     *
     * @return mixed
     */
    public function actionLk()
    {
        return $this->render('lk'); 
    }

     /**
     * Displays lk2 page.
     *
     * @return mixed
     */
    public function actionLk2()
    {
        return $this->render('lk2'); 
    }

    /**
     * Displays lk3 page.
     *
     * @return mixed
     */
    public function actionLk3()
    {
        return $this->render('lk3'); 
    }

    /**
     * Displays lk4 page.
     *
     * @return mixed
     */
    public function actionLk4()
    {
        return $this->render('lk4'); 
    }

    /**
     * Displays save page.
     *
     * @return mixed
     */
    public function actionSave()
    {
        return $this->render('save'); 
    }
}
