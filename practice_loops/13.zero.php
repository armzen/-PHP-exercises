<?php
echo '<pre>';
for( $y = 0; $y < 8; $y++ ) {
    for( $x = 0; $x < 6; $x++ ) {
        
        if((($x == 0 or $x == 5) and ($y > 0 and $y < 7)) or (($y==0 or $y==7) and( $x>0 and $x < 5))) {
            echo '*';
        }
        else{
            echo ' ';
        }
        
    }
    echo '<br>';
}
echo '</pre>';

?>