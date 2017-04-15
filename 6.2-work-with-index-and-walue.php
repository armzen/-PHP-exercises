<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body, h2 {margin: 0;}
        h2{
            font-weight: 400;
            text-align: center;
            color: indigo;
            background-color: papayawhip;
            padding: 15px 40px;
            border-bottom: 2px solid crimson;
        }
        .container{
            padding: 15px 50px;
            background-color:rgba(250, 250, 250, 0.29);
        }
        span{ color: coral; font-weight: 900}
        footer{
            background-color: ivory;
            padding: 4px 24px;
            color: navy;
            line-height: 190%;
            font-family: monospace;
            border-top: 2px solid crimson;
            
        }
        footer li strong{ 
            font-size: 15px; 
            text-shadow: 1px 1px 58px rgb(230, 116, 116);}
    </style>
</head>
<body>
   <h2>1. Ստեղծել դինամիկ զանգված՝ ռանդոմով փոփոխվող երկարությամբ:
   2.Գտնել այն էլեմենտները, որոնք ունեն զույգ ինդեքս/արժեք և ստանալ ամեն զույգի արտադրյալը: 3. Դուրս բերել կենտ ինդեքսները և արժեքները տողով, այնուհետև ստեղծել նոր զանգված միմյանց համապատասխանող կենտ ինդեքս/արժեք - զույգերով:</h2>
<div class="container">
    

<?php

$a = rand(1,10);
echo $a . '<br>';
for($i = 0; $i < $a; $i++){
    $b = range(1, $a);
}
print_r($b);
echo '<hr>';

$c = shuffle($b);
print_r($b);

echo '<p> Գտնենք այն էլեմենտները, որոնց ինդեքսն ու արժեքը զույգ է և ինդեքսը != 0-ի:</p>';

$count = 0;
$k = 0;
$v = 0;

$v_odd_key = 0;
$k_odd = 0;
    
foreach( $b as $key => $value){
    echo '<p>key=> ' . $key . ' value: ' . $value . '</p>';
    if($key%2 == 0 && $value%2 == 0 && $key!= 0){
        $count++;
        
        echo '<br>'.$key*$value . '<br>';
        $k .=$key;
    }
    elseif($key%2 == 1){
        $v_odd_key .=' '. $value;
            $k_odd .=' '. $key;
    }
    
}
echo 'պայմանին բավարարում են : '.$count.'<br>';
if(!$k == 0){
    $k = str_split($k,1);
    array_shift($k);
    echo '<p> ստացանք նաև պայմանին բավարարող key-երի զանգվածը:<br> ';
        print_r($k);
    echo '</p><hr>';
    
    echo '<p> Տողի տեսքով դուրս բերենք այն արժեքները, որոնց ինդեքսը կենտ է: ';
    echo '<span>';
        echo $k_odd . ' => ' . $v_odd_key;
        $vodd = explode(' ', $v_odd_key);
    echo '</span>';
    echo '</p>';
    
    echo '<p>Կամ զանգվածի տեսքով կենտ Value-ները: ';
        print_r($vodd);
    echo '</p> ';
    
    $kodd = explode(' ',$k_odd);
    echo '<p>Նաև կենտ key-երի զանգվածը: ';
        print_r($kodd);
    echo '</p>';
    
    echo '<h3> Վերջին քայլով միավորենք կենտ key / value զույգը՝ ստանալով նոր զանգված: </h3>';
    
    $arr_odd = array_combine($kodd, $vodd);
    print_r($arr_odd);
}

?>


</div>  
<footer>
    <ul>
       <h4>Օգտագործվեցին:</h4>
        <li><strong>Զանգվածի ստեղծման համար.</strong></li>
        <ul>
            <li><strong>$a=rand (1,10)</strong></li>
            <li><strong>range (1, $a);</strong></li>
            <li><strong>shuffle ($b);</strong></li>
        </ul>
        <li><strong>Ինդեքսների հետ աշխատանքում.</strong></li>
        <ul>
            <li><strong>foreach ( $b as $key => $value)</strong></li>
            
        </ul>
        <li><strong>Տողը զանգվածով արտահայտելու համար.</strong></li>
        <ul>
            <li><strong>str_split ($k,1);</strong></li>
            <li><strong>array_shift ($k);</strong></li>
            <li><strong>explode (' ', $v_odd_key);</strong></li>
        </ul>
        <li><strong>Կենտ key / value -ներով զանգ.-ի ստեղծման համար.</strong></li>
        <ul>
            <li><strong>array_combine($kodd, $vodd);</strong></li>
        </ul>
    </ul>
</footer>
</body>
</html>