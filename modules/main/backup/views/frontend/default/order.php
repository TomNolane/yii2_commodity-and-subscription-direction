<?php // for http://office.ad1.ru   
$request = Yii::$app->request; 
 
include('ad1ru/SxGeo.php');

if (isset($_SERVER['HTTP_X_REAL_IP'])) {
    $called_ip = $_SERVER['HTTP_X_REAL_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $called_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $called_ip = $_SERVER['REMOTE_ADDR'];
}

$SxGeo = new SxGeo(__DIR__ . '/ad1ru/SxGeo.dat');
$countryKey = $SxGeo->get($called_ip);


$infocdnData = [
    'orders' => [
        [
            'country'           =>  $countryKey, //страна доставки
            'fio'               =>  $request->post("name","0"), // Имя
            'phone'             =>  $request->post("phone","0"), // Телефон
            'user_ip'           =>  $called_ip, //ip пользователя
            'user_agent'        =>  $_SERVER['HTTP_USER_AGENT'], //UserAgent пользователя
            'order_time'        =>  time(), //timestamp времени заказа
        ]
    ],
    'system'    =>  [
        'network'   => 'ad1', // название сети
        'thread'    => 'mzhP', // id потока из ad1.ru, например bakm
        'subid'     => 'testdmitry', // 5 субайди, например subid1:subid2:subid3:subid4:subid5 (не обязательно)
        'site_key'  => '9f8ec1c7c3' // ключ
    ]
];


$infocdnJson = json_encode($infocdnData);

$handle = curl_init('http://infocdn.org/interface/api.php');
curl_setopt($handle, CURLOPT_POSTFIELDS, urlencode($infocdnJson));
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($handle);
curl_close($handle);


$url2 = 'http://gardenin.ml/save';  
$data2 = array('name' => $request->post("name","0"), 'email' =>  $request->post("email","0"), 'phone' =>  $request->post("phone","0"));

$options2 = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data2)
    )
);
$context  = stream_context_create($options2);
$result2 = file_get_contents($url2, false, $context); 
 
//header('Location: /lk');
echo '<script>document.location = "https://mikrodengi.tk/lk"</script>';