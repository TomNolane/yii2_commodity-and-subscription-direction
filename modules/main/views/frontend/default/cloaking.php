<?php
class Cloaking { 
	var $white;
	var $mobile;
	var $utm_source;
	var $userAgent;
	var $ip;
	var $bl = 'white';
	function __construct($_white,$_mobile = false) {
		$this->white = $_white;
		if($_mobile) $this->mobile = true;
		$this->utm_source = Yii::$app->request->get('utm_source','');
		$this->userAgent = Yii::$app->request->getUserAgent();
		$this->ip = Yii::$app->getRequest()->getUserIP();
		$this->start();
	}

	function GetCountry()
	{  
		$a = $this->ip;
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
		
		//$a = json_decode(file_get_contents('http://ip-api.com/json/'.$this->ip), true);
		//return $a['countryCode'];  
		 
		else return 'NONE';
	}

	function start()
	{  
		$contry = $this->GetCountry();
		if($contry == "RU" || $contry == "KZ" || $contry == "UA") 
		{
			if($this->mobile)
			{
				require_once 'Mobile_Detect.php';
				$detect = new Mobile_Detect;
				if($detect->isMobile() || $detect->isTablet())
				{
					$a = strtolower(Yii::app()->request->getUserAgent()); 
					if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|yabrowser|pingdom|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
					{
						echo $this->ShowWhiteHTML();
					}
					else  $this->ShowGreyHTML();
				}
				else $this->ShowWhiteHTML();
			}
			else
			{
				$a = strtolower($this->userAgent); 
				if(preg_match('/robot|bot|yahoo|mail|crawl|slurp|mediapartners|majesticsEO|facebook|yabrowser|pingdom|get|java|find|dataprovider|spider|crawler|curl|^$/i', $a))
				{
					echo $this->ShowWhiteHTML();
				}
				else  $this->ShowGreyHTML();
			}
		}
		else $this->ShowWhiteHTML();
	} 

	function ShowWhiteHTML()
	{
		$this->bl = "white";
		include $this->white;
		return "white";
	}

	function ShowGreyHTML()
	{ 
		if(!Yii::$app->request->get('utm_source')) {
			$this->ShowWhiteHTML();
		}
		echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
		
		$ee = 1;
		//include 'stat.php'; 
		$this->bl = "grey";
		$a = Yii::$app->request->get('utm_source');	 
		
		if(empty(explode("_", $a)[0]))
		{
			$this->ShowWhiteHTML();
			return;
		}
		
		if(empty(explode("_", $a)[1]))
		{
			$this->ShowWhiteHTML();
			return;
		}
		
		if(empty(explode("_", $a)[2]))
		{
			$this->ShowWhiteHTML();
			return;
		}

		return "grey";
	} 
}

$start = new Cloaking('white.php');

if($start->bl == 'white')
	return;

echo '123';
?>