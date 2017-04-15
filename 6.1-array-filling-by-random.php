<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body, h2 { margin: 0;}
        body{
            color: #359b9b;
            font-size: 1.1rem;
        }
        h2{
            font-weight: 500;
            text-align: center;
            color: rgba(149, 2, 211, 0.78);
            padding: 10px 25px 20px;
            border-bottom: 3px dashed #dadada;
            background-color: rgba(250, 240, 249, 0.74);
            
        }
        .container{
            padding: 15px 25px 0;
        }
        span{
            color: red;
            font-weight: 900;
        }
        footer h2{ color:forestgreen; padding: 5px 0 10px;}
        footer { border-bottom: 20px solid #ffcfcf; margin-bottom: 0;}
        ul li strong{ word-spacing: 2px; letter-spacing: 1px}
    </style>
</head>
<body>
<h2>Ստեղծում ենք զանգ. պատահական թվերով, գտնում մաքս.-մին արժեքները, նրանց ինդեքսները, խառնում ենք զանգ.-ը, հետո փոխում մաքս.-մին. արժեքները տեղերով:</h2>
<div class="container">
   
<?php

$a = rand(1,20);

for( $i= 0; $i < $a; $i++){
    $b = range(1,$a);
    
}
echo 'random number is: ' . $a . '<br>';
echo '<p> which generage new array : ';
print_r($b);
echo '</p>';

echo '<h3> Then we are shuffling it, and finding MIN and MAX values of generated array</h3>';
shuffle($b);
// echo of $c is boolean value //
print_r($b);

$mn = min($b);
$mn_key = array_search($mn, $b);
echo '<p> min-value is always: '. $mn . ', which index is: ' .$mn_key. '</p>';

$len = count($b);
$mx = max($b);
$mx_key = array_search($mx,$b);
echo '<p> max-value intime is: '. $mx . ' ,which index is ' .$mx_key. '</p>';

echo '<h3> Now, we are going to change position of min and max values </h3>';

$b[$mn_key] = '<span>'.$mx.'</span>';
$b[$mx_key] = '<span>'.$mn.'</span>';

echo '<p> Here is that array: ';
print_r($b);
echo '</p>';


?>
<footer>
    <h2>Օգտագործված ֆունկցիաներն են:</h2>
    <ul>
        <li><strong>rand (1,20) </strong></li>
        <li><strong>range (1,$a) </strong></li>
        <li><strong> shuffle ($b) </strong></li>        
        <li><strong>count ($b); max ($b); min ($b); </strong></li>
        <li><strong>array_search ($mn, $b)</strong></li>
    </ul>
</footer>
</div>  
</body>
</html>




