<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
$n = 5;
$count = 1;
     echo '<pre>';
for($a = $n; $a > 0; $a-- ) {
    for($b = $a; $b < $n+1; $b=$b+1){       
       printf("%4s", $count);       
        $count++;
    }
    echo "\n";
}
  echo '</pre>';
?>
</html>


