<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Ստեղծել զանգված, պատահական թվի երկարության: Տպել նվազման կարգով:</h2>
</body>
</html>
<?php

$i = rand(10,20);
echo 'the random number is: '.$i . '<br>';
$arr = range(10, $i, 1);
print_r($arr);
echo '<br> soting an reverse order: <br>';
rsort($arr);
echo 'result: ';
foreach($arr as $key => $value) {
    echo $value . ' ';
}
?>