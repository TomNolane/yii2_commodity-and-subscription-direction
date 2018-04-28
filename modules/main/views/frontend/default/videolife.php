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

	include 'white2.php';
	return;
	$s1 = explode("_", $a)[0];
    $s2 = explode("_", $a)[1];
	$s3 = explode("_", $a)[2];
	echo '<!doctype><html><header> <style>body {margin: 0;}</style></header><body>'; 
	echo "<script>window.location = 'http://tracker.fffgfry.com/tracker?offer_id=866&aff_id=998&aff_sub=".$s1."&aff_sub2=".$s2."&aff_sub3=".$s3."&cb=0'</script></body></html>"; 
?>