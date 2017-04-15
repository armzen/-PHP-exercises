<?php

    $arr = range(1,5,1);    
    print_r($arr);  

    $mx = max($arr);
    $mn = min($arr);

    $arr[0] = $mx;
    $len = count($arr);
    $arr[$len-1] = $mn;
    echo '<hr>';
    print_r($arr);


?>