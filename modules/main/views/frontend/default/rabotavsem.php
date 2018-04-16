<?php
function ShowWhiteHTML()
{
	$ee = 0;
	require_once 'white.php';
}

function ShowGreyHTML()
{
	//echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
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
ShowGreyHTML();
?>