<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3{
            width: 500px;
        }
        span{
            color: crimson;
            font-style: oblique;
        }
    </style>
</head>
<body>
    <h3>Ոնենք մեկ բազմաչափ զանգ: Ստանալ նորը, ամեն ներդրվածից վերցնելով համապատ-ն էլեմ.-ը: Այնուհետև վեր ածել սովորական թվային ինդեքսներով զանգ.-ի:</h3>    
    <?php
    echo '<strong> Տրված է. </strong> <br>';
    
    $color = array ( 
        "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third"));
    
    echo '<pre>';
    print_r($color);
    echo '</pre>';
    
    echo '<p><strong>Ստանալ array("red", 1, "second") զանգ-ը:<span>compact();</span></strong></p>';
    
    $red = $color['color']['a'];
    $num = $color['numbers'][0];
    $txt = $color['holes'][5];
    $new_arr = compact('red', 'num', 'txt');
    print_r($new_arr);
    
    echo '<p><strong>Վերաինդեքսավորել թվային բանալիներով զանգ-ի:<span>array_values($new_arr);</span></strong></p>';
    $new_int_keys = array_values($new_arr);
    print_r($new_int_keys);
    ?>
</body>
</html>