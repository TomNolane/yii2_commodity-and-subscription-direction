<?php
$s1 = explode("_", $a)[0];
$s2 = explode("_", $a)[1];
$s3 = explode("_", $a)[2];
echo '<!doctype><html><header><noscript><meta http-equiv="refresh"content="0; url=/"></noscript>  <style>body {margin: 0;}</style></header><body>';
echo "<script>window.location = 'http://casnogame.com/go/3c5512f71d01426ba0eee42428aa9b3e365b64d1eb0a0b0b&subid1=".$s1."&subid2=".$s2."&subid3=".$s3."'</script></body></html>"; 
?>