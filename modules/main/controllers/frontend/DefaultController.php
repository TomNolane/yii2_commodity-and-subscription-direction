<?php

namespace modules\main\controllers\frontend;

use Yii;
use yii\web\Controller;
use frontend\models\Visitors;
use frontend\models\Banip;
use frontend\models\Temp_ban;
use modules\main\models\frontend\ContactForm;
use modules\main\Module;

/**
 * Class DefaultController
 * @package modules\main\controllers\frontend
 */
class DefaultController extends Controller
{
    public $session;
    /**
     * @inheritdoc
     * @return array
     */
    
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        
        // открываем сессию
        $this->session = Yii::$app->session;
        if (!$this->session->isActive)  $this->session->open();

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

    public function BewteenBinarySearch($element, $data, $data2)
    {
        if(!isset($element) || empty($element)) return 'NONE4'; // если не передали IP |  if IP is empty
        $begin = round((count($data) -1 )/ 2); 
        $temp = explode(".", $element);
        $element =  $temp[0]*256*256*256 + $temp[1]*256*256 + $temp[2]*256 + $temp[3]; //преобразует значение IP в long | convert IP to long
        $temp = 1; $temp2 = 0;
        $prev_begin = 0; //для выявления рекурсии | for exit to recursion
        while (true) 
        { 
            $temp2++;
            if (isset($data[$begin]))
            {  
                 if($data[$begin] > $element)
                 {
                     if($begin <= 0)
                         return 'NONE1'; //если ИСКОМОЕ меньше наименьшего значения в Массиве "ОТ" | if $ELEMENT less then minimum of array $DATA
                     else
                     {
                         $begin = $begin - round(($begin / (2 * $temp)));
                         if($begin == $prev_begin && $begin == 1) $begin = 0;
                         else if($begin == $prev_begin) return 'NONE6'; // выход из рекурсии | for exit to recursion
                         $temp++;
                     }
                 }
                 else
                 { 
                     if($data[$begin] <= $element && $data2[$begin] >= $element)
                         return  "RU"; // если ИСКОМОЕ лежит в диапазоне между массивом $data и $data2 | if $ELEMENT between array $DATA and array $DATA2
                     else if($data[$begin] <= $element && $data2[$begin] <= $element && $begin <= count($data) -1)
                     {
                         $begin = $begin + round(($begin / (2 * $temp)));
                         if($begin == $prev_begin) return 'NONE7'; // выход из рекурсии | for exit to recursion
                         else if($begin > count($data2) -1)
                         {
                             return 'NONE8'; //если ИСКОМОЕ больше наибольшего значения в Массиве "ДО" | if $ELEMENT great then maximum of array $DATA2
                         }
                         $temp++;
                     }
                 }
                $prev_begin = $begin;
            } else return 'NONE9';
        }
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {   
        require_once 'data.php';

        $ip = Yii::$app->getRequest()->getUserIP(); 
        $useragent = Yii::$app->request->getUserAgent();
        $country = $this->BewteenBinarySearch(Yii::$app->getRequest()->getUserIP(),$data,$data2); 
        $serverName = 'https://'.Yii::$app->getRequest()->serverName."?".Yii::$app->request->queryString;
        if($country != 'RU')
        {
            $a = json_decode(file_get_contents('http://ip-api.com/json/'.$ip), true);
            $country = $a['countryCode'];  
        }

        // check IP for ban list
        $ban_ip = Banip::find('ip')->where('ip = :ip', [':ip'=> $ip])->count();

        // check for row parammetras 
        if(strpos(Yii::$app->request->queryString, '{source}') !== false || strpos(Yii::$app->request->queryString, '{campaign_id}') !== false || strpos(Yii::$app->request->queryString, '{keyword}') !== false || strpos(Yii::$app->request->queryString, '{SRC}') !== false || strpos(Yii::$app->request->queryString, '{PHRASE}') !== false)
            $ban_ip = 1;
        
        // add visitors
        $visitors = new Visitors();
        $visitors->ip = $ip; // add IP
        $visitors->useragent = $useragent; // add useragent
        $date = new \DateTime();
        $date = $date->format('Y-m-d H:i:s');
        $visitors->date = $date; // add Date
        $visitors->site = ($ban_ip > 0) ? 'white' : $serverName; // add site to visit
        $visitors->country = $country; // add what country
        require_once 'Mobile_Detect.php';
        $detect = new \Mobile_Detect;
        $is_mobile = 0;
        if($detect->isMobile()) $is_mobile = 1;
        else if($detect->isTablet()) $is_mobile = 2;
        $visitors->is_mobile = $is_mobile; // add is mobile or not
        $a = strtolower($useragent);
        $is_bot = 0;
        if(preg_match('/robot|bot|yahoo|mail|antivirus|fetcher|mail.ru_bot|crawl|slurp|mediapartners|majesticsEO|facebook|pingdom|get|java|find|radioclicker|dataprovider|spider|crawler|curl|^$/i', $a)) $is_bot = 1;
        else if ($detect->isBot()) $is_bot = 1;
        $visitors->is_bot = $is_bot; // add is bot or not
        $visitors->save(); // insert to visitors
        // end add visitors

        // start check for DOSS attack
        $dos = Visitors::find('date')->where('date = :date', [':date' => $date])->andWhere('ip = :ip', [':ip' => $ip])->count();

        $dateTime = strtotime('+ 30 minute');
        $dateTime = date('d-m-Y H:i:s', $dateTime);
        $dateTime2 = strtotime('+ 0 minute');
        $dateTime2 = date('d-m-Y H:i:s', $dateTime2);

        if(empty($this->session->get('date')))
        {
            $this->session->set('_ban', 'NOBAN');
            $this->session->set('date', $dateTime2);
        }

        if($dos >= 4)
        {
            $this->session->set('_ban', 'BAN');
            $this->session->set('date', $dateTime);
            $temp_ban = new Temp_ban();
            $temp_ban->ip = $ip;
            $temp_ban->useragent = $useragent;
            $date = new \DateTime();
            $date = $date->format('Y-m-d H:i:s');
            $temp_ban->date = $date;
            $temp_ban->site = ($ban_ip > 0) ? 'white' : $serverName;
            $temp_ban->country = $country;
            $temp_ban->save();
            return $this->render('ban',['bane_date'=> $this->session->get('date')]);
        }
        else
        {
            $ban = $this->session->get('_ban'); 
            $date2 = $this->session->get('date'); 
            
            if($ban == 'BAN' &&  $date2 > $dateTime2) return $this->render('ban',['bane_date'=> $this->session->get('date')]);
            else 
            {
                $this->session->set('_ban', 'NOBAN');
                $this->session->set('date', $dateTime2);
            }
        }
        // end for DOSS attack

        // add Bot to ban list
        if($is_bot == 1) 
        {
            $_banip = Banip::find('ip')->where('ip = :ip', [':ip' => $ip])->count();
            if($_banip == 0)
            {
                $banip = new Banip();
                $banip->ip = $ip;
                $banip->save(); // insert to banip
            } 
        }
		
		if($ban_ip > 0 || $is_bot == 1 || $country != 'RU')
                return $this->render('white');

        if(strpos(Yii::$app->getRequest()->serverName, 'vladimir-blog') !== false)
            return $this->render('vladimir-blog');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'lol-surprise-lp') !== false) 
        {  
                return $this->render('lol-surprise-lp',[
                    'variable' => $ban_ip]);
        }
        elseif(strpos(Yii::$app->getRequest()->serverName, 'ems-trainer-ron') !== false) 
            return $this->render('ems-trainer-ron');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'ems-trainer') !== false)
            return $this->render('ems-trainer18');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'cosmo-stars') !== false)
            return $this->render('cosmo-stars');
        elseif(strpos(Yii::$app->getRequest()->serverName, '198-fatcap5') !== false)
            return $this->render('198-fatcap5');
        elseif(strpos(Yii::$app->getRequest()->serverName, '198-fatcap9') !== false)
            return $this->render('198-fatcap9');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'ecoslim6') !== false)
            return $this->render('ecoslim6');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'ecoslim-inst') !== false)
            return $this->render('ecoslim-inst');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'fire-fit-one9') !== false)
            return $this->render('fire-fit-one9');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'fire-fit-one3') !== false)
            return $this->render('fire-fit-one3');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'blogsnew') !== false)
            return $this->render('blogsnew');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'erectilecream-netnova') !== false)
            return $this->render('erectilecream-netnova');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'zdorov-potency') !== false)
            return $this->render('zdorov-potency');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'zdorov-parasites') !== false)
            return $this->render('zdorov-parasites'); 
        elseif(strpos(Yii::$app->getRequest()->serverName, 'gardenin') !== false)
            return $this->render('gardenin'); 
		elseif(strpos(Yii::$app->getRequest()->serverName, 'musiconline') !== false)
            return $this->render('musiconline'); 
		elseif(strpos(Yii::$app->getRequest()->serverName, 'videolife') !== false)
            return $this->render('videolife'); 
		elseif(strpos(Yii::$app->getRequest()->serverName, 'onlinerabota') !== false)
            return $this->render('onlinerabota'); 
		elseif(strpos(Yii::$app->getRequest()->serverName, 'helpjob') !== false)
            return $this->render('helpjob'); 
        elseif(strpos(Yii::$app->getRequest()->serverName, 'rabotavsem') !== false)
            return $this->render('rabotavsem');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'rabotarus') !== false)
            return $this->render('rabotarus');
        elseif(strpos(Yii::$app->getRequest()->serverName, 'luckymir') !== false)
            return $this->render('luckymir');
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
