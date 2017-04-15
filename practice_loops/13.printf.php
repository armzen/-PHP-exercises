<?php
echo '<pre>';
for($j=1; $j < 15; $j=$j+1) {
    
    printf("$%05.2f",$j);
    echo '<br>';
}
echo '</pre>';
?>