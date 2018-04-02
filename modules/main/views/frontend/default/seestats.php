<?php
$request = Yii::$app->request;
$col= $request->get('id', 50);  
$file= file_get_contents("https://ecoslim-inst.tk/stat.log");
 ?>

<html>
<head>
<style type='text/css'>
 td.zz {PADDING-LEFT: 3px; FONT-SIZE: 9pt; PADDING-TOP: 2px; FONT-FAMILY: Arial; }
</style>
</head>

<body>
<center>
<?php
if ($col>sizeof($file)) { $col=sizeof($file); }
echo "Последние <b>".$col."</b> посещений сайта:"; ?>

<table width="680" cellspacing="1" cellpadding="1" border="0" STYLE="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="zz" width="100"><b>Время и дата</b></td>
 <td class="zz" width="200"><b>Данные о посетителе</b></td>
 <td class="zz" width="100"><b>IP/прокси</b></td>
 <td class="zz" width="280"><b>Посещенный URL</b></td>
</tr>

<?php 
	$arr = explode("||", $file);
	$arr = array_reverse($arr); 
	for($i = 1; $i < count($arr); $i++)
	{
		$string=explode("|",$arr[$i]);
		if(!empty($string[0]))
		{
			echo '<tr bgcolor="#eeeeee"><td class="zz">'.$string[0].'</td>';
			echo '<td class="zz">'.$string[1].'</td>';
			echo '<td class="zz">'.$string[2].'</td>';
			echo '<td class="zz">'.$string[3].'</td></tr>';
		}  
	} 
echo '</table>';
echo '<br>Просмотреть последние <a href=?col=100>100</a> <a href=?col=500>500</a>';
echo '<a href=?col=1000>1000</a> посещений.';
echo '<br>Просмотреть <a href=?col='.sizeof($file).'>все посещения</a>.</center>';
echo '</body></html>';
?>