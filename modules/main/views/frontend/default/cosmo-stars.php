<?php
header('Content-Type: text/html; charset =utf-8');
$x = curl_init();

curl_setopt_array($x, [
    CURLOPT_URL => 'http://www.tarotaro.ru/portal/horoscopes',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => 'login=Log+On&UserId=my_user&nolog_password=mypassword',
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER => [
        'Origin: https://www.mytest.com',
        //'Accept-Encoding: gzip,deflate,sdch',
        'Host: www.mytest.com',
        //'Accept-Language: en-US,en;q=0.8',
        'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36',
        //'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,/;q=0.8',
        'Referer: https://www.mytest.com/beg.do?',
    ]
]);

curl_exec($x);?>