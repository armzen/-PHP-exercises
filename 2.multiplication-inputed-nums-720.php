<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        
        form{
            width: 50.45%;
        }
        .but{
            padding: 6.5px 30px;
            vertical-align: top;
            font-size: 3vh;
        }
        
        #numer{
            line-height: 160%;
            font-size: 3.5vh;
            margin-bottom: 10px;
        }
        fieldset{
            padding: 10px;
        }
        label{ font-size: 4vh;}
        .c1{ color: tomato;}
        fieldset{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h2>հաշվել մուտքագրված թվերի արտադրյալը:</h2>
    <div>
        <?php
       
        if(isset( $_POST["numer"]) && is_numeric( $_POST["numer"])){
            $n = $_POST["numer"];
            $len = mb_strlen($n);
            $mul="1";
            $n = str_split($n,1);
            for($i=0; $i<$len; $i++){
                
                $mul =$mul * $n[$i];
                
            }
            echo "<h3>Resul of Multiplicaton: <span class='c1'>",$mul,"</span></h3>";
            echo '<h3><pre>';
            
                print_r($n);
            echo '</pre></h3>';            
        }else{
            echo "<h4> Please, enter the number </h4>";
        }
        
        ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
        <legend>Multiplication of entered numbers</legend>
        <label for="numer">
            Enter number here:
            <input type="text" name='numer' id='numer'>
        </label>
            <fieldset>
                <input type="submit" value="enter" class="but">
                <input type="reset" value="clear" class="but">
            </fieldset>         
        </fieldset>
    </form>
    
</body>
</html>


























