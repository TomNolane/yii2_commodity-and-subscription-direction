<?php
if (empty($_GET['utm_source'])) { 
	include 'white.php';
	return;
}  

$a = $_GET['utm_source'];	

if(empty(explode("_", $a)[0]))
{ 
	include 'white.php';
	return;
}

if(empty(explode("_", $a)[1]))
{ 
	include 'white.php';
	return;
}

if(empty(explode("_", $a)[2]))
{ 
	include 'white.php';
	return;
} 
	
	$s1 = explode("_", $a)[0];
    $s2 = explode("_", $a)[1];
	$s3 = explode("_", $a)[2];
	//echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
	//echo "<script>window.location = 'http://tracker.fffgfry.com/tracker?offer_id=866&aff_id=998&aff_sub=".$s1."&aff_sub2=".$s2."&aff_sub3=".$s3."&cb=0'</script></body></html>"; 
	require 'zaymplus.php';
?>