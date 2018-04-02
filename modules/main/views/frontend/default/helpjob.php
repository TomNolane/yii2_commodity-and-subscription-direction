<?php
function ShowWhiteHTML()
{
	$ee = 0;
	require_once 'white.php';
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
	include 'grey.php';
	//echo "<script>window.location = 'http://track.arrogantfruit.com/click?pid=3148&offer_id=234&l=1501588303&sub1=".$s1."&sub2=".$s2."&sub3=".$s3."'</script></body></html>";  
}

function GetCountry()
{
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	$a = json_decode(file_get_contents('https://freegeoip.net/json/'.$ipaddress), true);
	return $a['country_code'];
}

if(GetCountry() == "RU")
{
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	if(!$detect->isBot())
	{
		$a = strtolower($_SERVER['HTTP_USER_AGENT']);

		if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|pingdom|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
		{
			echo ShowWhiteHTML();
		}
		else  ShowGreyHTML();
	}
	else ShowWhiteHTML();
}
else ShowWhiteHTML();
?>