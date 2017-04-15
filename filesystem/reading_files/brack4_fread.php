<?php

  $fop = fopen("file.txt", "r");
$fread = fread($fop, filesize("file.txt"));
echo nl2br($fread);
echo '<br>'.filesize('file.txt') . '<br>';

echo 'size of filesize.txt: '. filesize('filesize.txt');

?>