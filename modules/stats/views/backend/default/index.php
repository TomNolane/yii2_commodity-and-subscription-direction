<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use modules\stats\Module;

$this->title = Module::t('module', 'Label');
$this->params['breadcrumbs'][] = Module::t('module', 'Label');
?>
<style>
 .wrap {
  overflow-wrap: normal;  /* не поддерживает IE, Firefox; является копией word-wrap */ 
  word-wrap: break-word;
  word-break: break-all;  /* не поддерживает Opera12.14, значение keep-all не поддерживается IE, Chrome */ 
  line-break: auto;  /* нет поддержки для русского языка */ 
  hyphens: manual;  /* значение auto не поддерживается Chrome */  
}
.row {
	margin-right: 0px !important;
    margin-left: 0px !important; 
}
</style>

<div class="sites-backend-default-index">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

            <div class="box-tools pull-right"></div>
        </div>
		<div class="box-body">
		<?php $count = count($visitors); ?>
			<h2>Статистика за <?php echo $dt;?></h2>
			<p>Всего заходов за сегодня: <?php echo $count;?> </p>
			<p>Всего кол-во ботов сегодня: <?php 
			$r2 = array_filter($visitors, function($item){
				return $item['is_bot'] == 1;
			  }); 
			echo count($r2); 
			?> 
			</p>
			<p>Перешли на белую страницу: <?php 
			$r3 = array_filter($visitors, function($item){
				if($item['country'] != 'RU' || $item['site'] == 'white' || $item['is_bot'] == 1)
					return 1;
			  }); 
			echo count($r3); 
			?> 
			</p>
			<p>Перешли на серую страницу: <?php echo ($count - count($r3));?></p>
			<div class="row">
			<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
				<tr>
					<th>User Agent</th>
					<th>Время</th>
					<th>Сайт</th>
					<th>Страна</th>
					<th>Экран</th>
					<th>Бот</th>
					<th>IP</th>
				</tr>
				</thead>
				<tbody>
			<?php 
				foreach($visitors as $r)
				{
				echo '<tr>
					<td class="wrap col-md-4">'.$r["useragent"].'</td>
					<td class="col-md-1">'.$r["date"].'</td>
					<td class="wrap col-md-2">'. urldecode($r["site"]).'</td>
					<td class="col-md-1">'.$r["country"].'</td>
					<td class="col-md-1">'.(($r["is_mobile"] == 0) ? "Декстоп" : (($r["is_mobile"] == 1) ? "Мобайл" : "Планшет")).'</td>
					<td class="col-md-1">'.(($r["is_bot"] == 1) ? "ДА":"НЕТ").'</td>
					<td class="col-md-2">'.$r["ip"].'</td>
				</tr>';
				}
			?>  
				</tbody>
			</table> 
			</div>
		</div>
    </div>
</div>
