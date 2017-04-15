<?php

$a = range(1,20);
$l = count($a);

for($i = 0; $i < $l; $i++) {
$ln = strlen($a[$i]);
   //echo $ln .'<br>';
    
    if($ln == 1){
        echo '0'.$a[$i];
    }
    else{
        echo $a[$i];
    }
}

?>