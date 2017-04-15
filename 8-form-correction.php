<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>Arakelyan Armen Levoni</p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name='fullname'>
        <input type="submit" value="submit">
    </form>
    
    <?php
    

    if(!empty($_POST['fullname'])){
        
        $fn = $_POST['fullname'];
        
        $full = explode(' ', $fn);
        
        $anun = $full[1];
        $azg = $full[0];
        $hanun = $full[2];
        $anun = (string)$anun;
        $hanun = (string)$hanun;
        $a1 = substr("$anun",0,1);
        $h1 = substr("$hanun",0,1);
       
        echo $azg.' ', $a1.'. ', $h1.'.';
        
        //var_dump($anun);
        //print_r($full);
                
    }
          else{
              echo 'Please Enter your full name';
          }
    ?>
    
</body>
</html>