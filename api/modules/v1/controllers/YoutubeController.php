<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;
/**
 * youtube Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class YoutubeController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Youtube';
}