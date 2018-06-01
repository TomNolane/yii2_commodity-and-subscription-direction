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
	echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
	echo "<script>window.location = 'https://helpjob.tk?utm_source=".$a."'</script></body></html>";   
?>