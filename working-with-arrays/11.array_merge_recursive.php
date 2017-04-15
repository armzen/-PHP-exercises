<?php
// print_r();

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource","com");
$arr_2  = array_slice($array2,0,1);
$arr_3 = array_slice($array2,1,1);

$array3 = array_merge_recursive($arr_2, $array1[0]);
$array4 = array_merge_recursive($arr_3,$array1[1]);

$arr[0]=$array3;
$arr[1]=$array4;


echo '<pre>';    
    print_r($arr);
echo '</pre>'

?>