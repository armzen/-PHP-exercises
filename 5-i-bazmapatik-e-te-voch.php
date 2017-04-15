<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3{ font-weight: 300}
    </style>
</head>
<body>
    <h3>Թվերը որոնք բաժանվում են և 5-ի և 2-ի : 20-45 միջակայքում: fmod()-function.</h3>
<?php

    for($i = 20; $i < 45; $i++){
        if( fmod($i,5)==0 && fmod($i,2)==0){
            echo $i . '<br>';
        }
    }

?> 
    
    
</body>
</html>
