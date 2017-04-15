<?php

$n = 6;
$k = 1;

for($i = 1;$i < $n ; $i++) {
    echo 'I is: '. $i. '<br>';
    $k *=$i;
}

echo 'K is: ' . $k . '<br>';
echo "Factorial of $n is: " . $n*$k;

?>