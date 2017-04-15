<?php

    $fop = fopen("file_br.txt", 'r');
    while($line = fgets($fop)) {
        echo $line;
    }

?>