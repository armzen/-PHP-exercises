<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h3> array_slice($array, $start, $quty)</h3>
    <?php
    
    $arr = array ('one', 'two', 'three');
    $barr = array ( 1, 2, 3);
    
    $slice_a = array_slice($arr, 2, 1);
    echo '<pre>';
    print_r($slice_a);
    print_r($arr);
    echo '</pre>';
    
    
    $slice_b = array_slice($barr, 0, 2);
    echo '<pre>';
    print_r($slice_b);
    print_r($barr);
    echo '</pre>';
    
    ?>
</body>
</html>