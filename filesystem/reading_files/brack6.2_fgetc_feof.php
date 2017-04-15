<?php

$fop = fopen("file_br.txt","r");

    while(!feof($fop)) {
        $char = fgetc($fop);
        echo $char;
    }

?>