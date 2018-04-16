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
		<?php 
			
			function unique_multidim_array($array, $key) { 
				$temp_array = array(); 
				$i = 0; 
				$key_array = array(); 
				
				foreach($array as $val) { 
					if (!in_array($val[$key], $key_array)) { 
						$key_array[$i] = $val[$key]; 
						$temp_array[$i] = $val; 
					} 
					$i++; 
				} 
				return $temp_array; 
			} 
			$count = count($visitors); 
			$visitors2 = unique_multidim_array($visitors,'ip');
			$count2 = count($visitors2);
		?>
			<h2>Статистика за <?php echo $dt;?></h2>
			<p>Всего заходов за сегодня: <?php echo $count;?> | Уникальных заходов: <?php echo $count2;?></p>
			<p>Всего кол-во ботов сегодня: <?php 
			$r2 = array_filter($visitors, function($item){
				return $item['is_bot'] == 1;
			  }); 
			echo count($r2); 
			?> 
			| Уникальных ботов: <?php
			$r3 = array_filter($visitors2, function($item){
				return $item['is_bot'] == 1;
			  });
			echo count($r3);?>
			| Яндекс: <?php
				$r6 = array_filter($visitors2, function($item){
					if (strpos(strtolower($item['useragent']), 'yandexbot') !== false || strpos(strtolower($item['useragent']), 'yabot') !== false || strpos(strtolower($item['useragent']), 'metrika') !== false || strpos(strtolower($item['useragent']), 'yandex.com/bots') !== false)
						return '1';
				});
				echo count($r6);
			?>
			| Facebook: 
			<?php
				$r7 = array_filter($visitors2, function($item){
					if (strpos(strtolower($item['useragent']), 'facebook') !== false)
						return '1';
				});
				echo count($r7);
			?>
			| Google: <?php
				$r8 = array_filter($visitors2, function($item){
					if (strpos(strtolower($item['useragent']), 'google') !== false)
						return '1';
				});
				echo count($r8);
			?>
			| Mail: <?php
				$r9 = array_filter($visitors2, function($item){
					if (strpos(strtolower($item['useragent']), 'mail.ru_bot') !== false)
						return '1';
				});
				echo count($r9);
			?>
			</p>
			<p>Перешли на белую страницу: <?php 
			$r4 = array_filter($visitors, function($item){
				if($item['country'] != 'RU' || $item['site'] == 'white' || $item['is_bot'] == 1)
					return 1;
			  }); 
			echo count($r4); 
			$r5 = array_filter($visitors2, function($item){
				if($item['country'] != 'RU' || $item['site'] == 'white' || $item['is_bot'] == 1)
					return 1;
			  });
			?> 
			| Уникальных заходов на белую страницу: <?php echo count($r5); ?>
			</p>
			<p>Перешли на серую страницу: <?php echo ($count - count($r4));?> | Уникальных переходов на серую страницу: <?php echo ($count2 - count($r5));?> </p>
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
