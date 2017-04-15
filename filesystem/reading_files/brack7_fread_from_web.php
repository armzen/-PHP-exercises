<?php

$fop = fopen("http://php.net/manual/ru/function.fgetc.php", "r");
    while(!feof($fop)) {
        $from_web = fread($fop, 1);
        echo $from_web;
    }

?>