<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="degree">
        <input type="submit" value="submit">
    </form>
    
    <?php
    if(isset($_POST['degree']) && is_numeric($_POST['degree'])){
        
        $d = $_POST['degree'];
        $hour = floor($d/30);
        $rope = ($d-$hour*30)*2;
        
        echo 'houre:' . $hour . 'minutes: '. $rope;
        

        
    }
    else{
        echo 'Please enter value';
    }
   
    
    ?>
</body>
</html>