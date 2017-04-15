<?php

$f = file('file.txt');

    foreach($f as $k => $l){
        echo nl2br($l);
    }
echo $f[2];

$row_count = count($f);
echo $row_count;
?>