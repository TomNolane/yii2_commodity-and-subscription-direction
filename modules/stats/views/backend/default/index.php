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
				return array_unique($array, SORT_REGULAR);
				// $temp_array = array(); 
				// $i = 0; 
				// $key_array = array(); 
				// $key_array2 = array();
				// foreach($array as $val) { 

				// 	if (!in_array($val[$key], $key_array) || ( !in_array($val['site'], $key_array2) && in_array($val[$key], $key_array)))  { 
				// 		$key_array[$i] = $val[$key];
				// 		$key_array2[$i] = $val['site']; 
				// 		$temp_array[$i] = $val; 
				// 		$i++; 
				// 	}
				// } 
				// return $temp_array; 
			} 



			$count = count($visitors0); 
			$visitors2 = unique_multidim_array($visitors0,'ip');
			$count2 = count($visitors2);

			// count bots
			// all bots
			$r2 = array_filter($visitors0, function($item){
				return $item['is_bot'] == 1;
			  });
			// inuq bots
			$r3 = array_filter($visitors2, function($item){
				return $item['is_bot'] == 1;
			});
			// yandex bots
			$r6 = array_filter($visitors2, function($item){
				if (strpos(strtolower($item['useragent']), 'yandexbot') !== false || strpos(strtolower($item['useragent']), 'yabot') !== false || strpos(strtolower($item['useragent']), 'metrika') !== false || strpos(strtolower($item['useragent']), 'yandex.com/bots') !== false)
					return '1';
			});
			// facebook bots
			$r7 = array_filter($visitors2, function($item){
				if (strpos(strtolower($item['useragent']), 'facebook') !== false || strpos(strtolower($item['useragent']), 'facebot') !== false || strpos(strtolower($item['useragent']), 'facebookexternalhit') !== false)
					return '1';
			});
			// google bots
			$r8 = array_filter($visitors2, function($item){
				if (strpos(strtolower($item['useragent']), 'google') !== false)
					return '1';
			});
			// mail bots
			$r9 = array_filter($visitors2, function($item){
				if (strpos(strtolower($item['useragent']), 'mail.ru_bot') !== false)
					return '1';
			});


			if($bot_enable == 'true'){
				// without bots
				$r10 = array_filter($visitors0, function($item){
					return $item['is_bot'] == 0;
				});
			}
			else
			{
				$r10 = array_filter($visitors, function($item){
					return $item['is_bot'] == 0;
				});
			}
			// without bots uniq
			$r11 = array_filter(unique_multidim_array($visitors0,'ip'), function($item){
				return $item['is_bot'] == 0;
			});
			// go to white page all
			$r4 = array_filter($r10, function($item){
				if($item['country'] != 'RU' || $item['site'] == 'white' || $item['is_bot'] == 1)
					return 1;
			}); 
			// go to white page uniq
			$r5 = array_filter($r11, function($item){
				if($item['country'] != 'RU' || $item['site'] == 'white' || $item['is_bot'] == 1)
					return 1;
			});  
 

			function array_values_recursive($ary)
			{
			$lst = array();
			foreach( array_keys($ary) as $k ){
				$v = $ary[$k];
				if (is_scalar($v)) {
					$lst[] = $v;
				} elseif (is_array($v)) {
					$lst = array_merge( $lst,
						array_values_recursive($v)
					);
				}
			}
			return $lst;
			}

			//var_dump(array_count_values(array_column($r11, 'site')));
			 // $counts['94.159.43.198'];
 
		?>
		
			<h2><span class="col-md-4">Статистика за <?php echo str_replace(array('December', 'November', 'October', 'September', 'August', 'July', 'June', 'May', 'April', 'March', 'February', 'January'), array('декабря', 'ноября', 'октября', 'сентября', 'августа', 'июля', 'июня', 'мая', 'апреля', 'марта', 'февраля', 'января'), $dt);?></span><span class="col-md-3">Выбрать дату:<input type="text" class="form-control" id="date" name="date"></span><span class="col-md-3 "><span class="h3">Показывать ботов </span><div class="material-switch pull-right">
                            <input id="someSwitchOptionWarning" name="someSwitchOption001" <?php if($bot_enable == 'true') echo 'checked';?> type="checkbox"/>
                            <label for="someSwitchOptionWarning" class="label-warning"></label>
                        </div></span><br><br></h2>
			<hr>
			<p>Кол-во ботов сегодня: <?php echo count($r2);?> 
			| Уникальных ботов: <?php echo count($r3);?>
			( Яндекс: <?php echo count($r6); ?>
			| Facebook:  <?php echo count($r7);?>
			| Google: <?php echo count($r8);?>
			| Mail: <?php echo count($r9);?> )
			</p>
			<hr>
			<p><strong>Статистика без ботов:</strong></p>
		 	
			
			<div class="row">
			<table id="example2" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
				<tr>
					<th>Сайт</th>
					<th>Заходов всего</th>
					<th>Уинкальных</th> 
				</tr>
				</thead>
				<tbody>
			<?php
			 $first_names = array_column($r10, 'site');
			 $first_names2 = array_column($r11, 'site');
			 $first_names3 = array_count_values($first_names2);
			 foreach(array_count_values ($first_names) as $key=>$t)
			 {
				echo '<tr><td class="wrap сol-md-6">'.$key.'</td><td class="wrap сol-md-3">'.$t.'</td><td class="wrap сol-md-3">'.((!empty($first_names3[$key])) ? $first_names3[$key] : 0).'</td></tr>';
			 } 
			?>
			</tbody>
			</table> 
			</div>
			<hr>
			<p>Всего заходов за сегодня: <?php echo count($r10);?> | Уникальных заходов: <?php echo count($r11);?></p>
			<p>Перешли на белую страницу: <?php echo count($r4);?> 
			| Уникальных заходов на белую страницу: <?php echo count($r5); ?>
			</p> 
			<p>Перешли на серую страницу: <?php echo (count($r10) - count($r4));?> | Уникальных переходов на серую страницу: <?php echo (count($r11) - count($r5));?> </p>
			<p><strong>Конверсия уникальных посещений:</strong></p>
			<p>белых страниц: <?php echo round((count($r5) * 100) / count($r11)); ?>% | серых страниц: <?php echo round(((count($r11) - count($r5)) * 100) / count($r11)); ?>%</p>
			<hr>
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
				if($bot_enable == 'true')
				{
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
				}
				else
				{
					foreach($r10 as $r)
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
				}
				
			?>  
				</tbody>
			</table> 
			</div>
		</div>
    </div>
</div>
