<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use modules\sites\Module; 
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Module::t('module', 'All sites');
$this->params['breadcrumbs'][] = Module::t('module', 'All sites');
?>

<style>
.wrap {
    overflow-wrap: normal;
    word-wrap: break-word;
    word-break: break-all;
    line-break: auto;
    hyphens: manual;
}
</style>

<div class="sites-backend-default-index">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

            <div class="box-tools pull-right"></div>
        </div>
		<div class="box-body">




<div class="sites-index">
<div class="row">
<div class="col-md-12">
<h1><?= Html::encode($this->title) ?></h1>
<?php Pjax::begin(); ?>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php echo \Yii::t('module', 'All sites'); ?>
<p>
    <?= Html::a('Добавить сайт', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel, 
    'tableOptions' => [
        'class' => 'table table-striped table-bordered'
    ],
    
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'], 
        [
            'attribute' => 'site', 
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'text'
        ],
        [
            'attribute' => 'senpuls',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'metrika',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'facebook',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'google_analytics',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'adsense',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'yandex_rtb',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        'enable',
        [
            'attribute' => 'white',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        [
            'attribute' => 'grey',
            'contentOptions' => ['class' => 'wrap'],
            'headerOptions' => ['class' => 'text-center'],
            'format' => 'ntext'
        ],
        'utm_enable', 
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
<?php Pjax::end(); ?>
</div> </div></div>

			 
		</div>
    </div>
</div>
