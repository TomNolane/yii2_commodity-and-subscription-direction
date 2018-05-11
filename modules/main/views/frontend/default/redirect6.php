<?php
echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript><style>body {margin: 0;}</style></header><body>';
if(empty(explode("_", $a)[3]))
     $s1 = "ne-peredaetsya";
else  $s1 = explode("_", $a)[3];

$link = "https://app.appsflyer.com/id1299543298?pid=advertise_95037&c=YWR2ZXJ0aXNlX2NwaV85NTAzN19iZXRtYXhf&clickid=$s1&af_adset=$a";
/*$link1 = "http://playony.ru/go/3c5512f77200426ba0eee42428aa9b3e365b64d1eb0a0b0b/";
$link2 = "http://casnogame.com/go/3c5512f71d01426ba0eee42428aa9b3e365b64d1eb0a0b0b/";

 if(date('s') % 2 == 0)
     $link =  $link1;
 else $link =  $link2;
 

echo "<script>window.location = '".$link."?utm_source=".$a."'</script></body></html>";   */
echo "<script>window.location = '".$link."'</script></body></html>";  
?>