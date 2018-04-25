<?php 
        // counts
       echo $model['facebook'];
       echo $model['senpuls'];
       echo $model['google_analytics'];
       echo $model['metrika'];
    ?>
</head> 
<body>
<?php 
// advertising
echo $model['adsense']; 
echo $model['yandex_rtb'];
?>
<h1>Превышено кол-во запросов с IP адреса</h1>
<h2>Вы заблокированы до: <?= $bane_date; ?></h2>