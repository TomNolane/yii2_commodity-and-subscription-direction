<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

use yii\data\ActiveDataProvider;
/**
 * youtube Controller API
 *
 */
class YoutubeController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Youtube';

    public function actionSearch()
    {
        $page = 1;
        if (!empty($_GET)) {
            $model = new $this->modelClass;
            
            foreach ($_GET as $key => $value) 
            {
                if($key == "page" && !empty($value))
                {
                    $int = (int) preg_replace('/[^0-9]/', '', $value);
                    $page = abs($int);
                }
                else
                {
                    if (!$model->hasAttribute($key)) {
                        throw new \yii\web\HttpException(404, 'Invalid attribute:' . $key);
                    }
                }
            }
            try {

            $query = $model->find();
                foreach ($_GET as $key => $value) {
                    if($key != "page")
                        $query->andWhere([ '=', $key , $value ]);
                } 

                $provider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                    'defaultPageSize' => 20,
                    'page' => ($page -1)
                    ],
                ]);
            } catch (Exception $ex) {
                throw new \yii\web\HttpException(500, 'Internal server error');
            }

            if ($provider->getCount() <= 0) {
                throw new \yii\web\HttpException(404, 'No entries found with this query string');
            } else {
                return $provider;
            }
        } else {
            throw new \yii\web\HttpException(400, 'There are no query string');
        }
    }
}