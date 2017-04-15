<?php

$f = readfile("file_br.txt");
echo $f;

$count_char = count_chars($f);
echo '<br>'.count($count_char);
?>