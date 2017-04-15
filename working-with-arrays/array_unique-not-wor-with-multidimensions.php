<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a = array(
        "b" => array( 1, 2, 1, 2),
        "c" => array( 1, 2, 1, 2),
        "d" => array( 1, 2, 1, 2),    
    )
        
    $e = array_unique($a["b"]);
    print_r($e);
    
    ?>
</body>
</html>