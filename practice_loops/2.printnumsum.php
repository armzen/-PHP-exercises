<?php
$array = array();

for($i=1;$i <=30; $i++) {
   $array[$i] = $i;
}
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $sum = array_sum($array);
    echo $sum;
?>