<?php

$fop = fopen("file_br.txt", "r");

    while($line = fgetc($fop)) {
        echo $line;
    }


fclose($fop);
?>