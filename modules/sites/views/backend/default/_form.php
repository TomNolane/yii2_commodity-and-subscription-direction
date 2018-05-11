<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senpuls')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metrika')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facebook')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'google_analytics')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adsense')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yandex_rtb')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enable')->textInput() ?>

    <?= $form->field($model, 'white')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grey')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'utm_enable')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
