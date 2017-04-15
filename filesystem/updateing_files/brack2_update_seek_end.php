<?php

$fop = fopen("file.txt", "r+");
$pos1 = ftell($fop);
fseek($fop,24,SEEK_SET);
$pos2 = ftell($fop);
fwrite($fop,"<p>line new</p>");
$fop_r = fopen("file.txt", "r");
$fr = fread($fop_r, filesize("file.txt"));
echo nl2br($fr);

echo '<br>pos1: '.$pos1 . ' ,pos2: ' .$pos2;

?>