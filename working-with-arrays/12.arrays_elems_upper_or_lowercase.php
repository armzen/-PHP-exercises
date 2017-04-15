<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Patua+One|Roboto+Condensed" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            font-family: 'Roboto Condensed', sans-serif;
            letter-spacing: 1px;
        }
        p{
            border: 2px solid #a9a9a9;
            width: 400px;
            padding: 4px 6px;
            font-size: 18px;
            color: #9b9b9b;
        }
    </style>
</head>
<h2> array_walk( $array, 'callback') </h2>
<h4>Typically, callback-function takes on two parameters. <br>
    The array parameter's value being the first, and the key/index second.</h4>
<body>
  
   <?php    
    $Color = array('A' => 'blue', 'B' => 'green', 'c' => 'Red');

    function upper($value) {
        $value = strtoupper($value);
        echo $value . ' ';
    }

    function lower($value) {
        $value = strtolower($value);
        echo $value. ' ';
    }
    echo '<p>';
    array_walk($Color, 'upper');
    echo '<br>';
    array_walk($Color, 'lower');
    echo '</p>';
?>
    
</body>
</html>
