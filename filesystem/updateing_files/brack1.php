<?php

$fop_a = fopen("file.txt", "a+");
$add = fwrite($fop_a, "new line \r");

if($add) { echo "added! <hr>";}
fclose($fop_a);

$fop_r = fopen("file.txt", "r");
$fread = fread($fop_r, filesize("file.txt"));
echo nl2br($fread);

?>