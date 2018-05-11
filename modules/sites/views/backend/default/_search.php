<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VisitorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'site') ?>

    <?= $form->field($model, 'senpuls') ?>

    <?= $form->field($model, 'metrika') ?>

    <?= $form->field($model, 'facebook') ?>

    <?php  echo $form->field($model, 'google_analytics') ?>

    <?php  echo $form->field($model, 'adsense') ?>

    <?php  echo $form->field($model, 'yandex_rtb') ?>

    <?php echo $form->field($model, 'enable') ?>

    <?php echo $form->field($model, 'white') ?>

    <?php echo $form->field($model, 'grey') ?>

    <?php echo $form->field($model, 'utm_enable') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
