<?php
function ShowWhiteHTML()
{
	 
	require_once 'white.php';
}

function ShowGreyHTML()
{
	
	if (empty($_GET['utm_source'])) {
		ShowWhiteHTML();
		return;
	}  
	
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
	include 'grey.php'; 
}

ShowGreyHTML();
?>