<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html, body, h1, h3, p{ margin: 0;}
        html{background-color: aliceblue}
        body{
            margin: 10px 10%;
            background-color: #fff;
        }
        header{
            border-bottom: 7px solid #31bf1e;
            padding:0.6% 0 1.2%;
            text-align: center;
        }
        header p{
            font-family: cursive;
            padding: 2px;
            color: crimson;
        }
        .hh{ 
            font-weight: 100;
            color: cadetblue;
            text-align: center;
        }
        h3 span{
            font-weight: 200;
            color: forestgreen;
        }
        form{
            width: 40%;
            height: auto;
        }
        legend{
            font-style: oblique;
        }
        #sep{ float: left; margin-left: 10%; font-size: 4vh;line-height: 140%;width: 80%;}
        .b1{ float: right;padding: 2% 8%; font-size: 3vh; width: 40%}
        .f2{ padding-right: 20%}
        
        @media screen and (max-width: 767px){
            body{
                margin: 0;
                width: 100%;
            }
            .hh{
                font-size: 4vh;
                
            }
            form{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
       <h1 class="hh">Մուտքագրված թվերի գումարի բաժանում թվի երկարության վրա:</h1>
       <p>տողի միակ նորմալ փոխակերպումը զանգվածի str_split() - ֆունկցիան է:</p>
   </header>
   <?php

    if(isset($_POST['sep']) && is_numeric($_POST['sep'])){

        $sep = $_POST['sep'];
        $len = mb_strlen($sep);
        echo 'length: '.$len. '<br>';
        $a = str_split($sep,1);
        $sum ="";
        for( $i = 0; $i < $len; $i++){
            $sum += $a[$i];
        }
        
        echo '<h3><span>Sum / Length =</span> ',$sum/$len,'</h3>';
    }else{
       echo '<h3> Enter the number below. </h3>';
    }
    
   ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
           <legend>Բաժանաում:</legend>
            <label for="">
                <input type="text" name="sep" id="sep">
            </label>
        </fieldset>
        <fieldset class="f2">
            <input type="submit" value="submit" class="b1">
            <input type="reset" value="reset" class="b1">
        </fieldset>
    </form>
</body>
</html>








