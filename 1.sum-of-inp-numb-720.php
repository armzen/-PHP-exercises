<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-family: monospace;
            font-size: 22px;
        }
        form{
            border: 2px dashed #aecbae;
            width: 60%;
        }
        #n { 
            line-height: 160%;
            font-size: 20px;
            font-weight: 500;
        }
        .bt{
            padding: 10px 18px;
            margin: 0;
        }
    </style>
</head>
<body>
   <h2>Հաշվել մուտքագրված թվերի գումարը:</h2>
    <?php
    $sum = "0";
        if( isset($_POST["numb"]) && is_numeric($_POST["numb"])){
            $a = $_POST["numb"];            
            $s_len = mb_strlen($a);
            
            
            for($i=0; $i<$s_len; $i++){
                $sum += $a[$i];
            }
            
            echo 'sum: ',$sum."<br>";
            echo 'entered num: ',$a;
            
        }
        else{
            echo "<p> Please. enter the number";
        }   
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="n">
        Enter number: <input type="text" id="n" name="numb">
        </label>
        <input type="submit" value="send" class="bt">
        <input type="reset" value="reset" class='bt'>
    </form>
</body>
</html>