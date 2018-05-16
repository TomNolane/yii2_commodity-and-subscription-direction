<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

use yii\data\ActiveDataProvider;
/**
 * youtube Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Youtube2Controller extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Youtube2';

    public function actionSearch()
    {
        if (!empty($_GET)) {
            $model = new $this->modelClass;
            foreach ($_GET as $key => $value) {
                if (!$model->hasAttribute($key)) {
                    throw new \yii\web\HttpException(404, 'Invalid attribute:' . $key);
                }
            }
            try {

            $query = $model->find();
                foreach ($_GET as $key => $value) {
                    $query->andWhere(['like', $key, $value,false]);
                }

                $provider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                    'defaultPageSize' => 20,
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