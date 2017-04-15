<?php

$n = 11;
$c=1;
echo '<pre>';
for($i = $n; $i > 0; $i--) {
    for($j = $i; $j< $n; $j++) {
        printf("%5s",$c);
        $c++;
    }
    echo "\n";
}
echo '</pre>';

?>