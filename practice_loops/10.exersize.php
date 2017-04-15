<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td{ text-align: center}
        h3{ margin: 0 0 4px 2px;padding: 0px; font-weight: 300}
        table{ margin-top: 6px;}
    </style>
</head>
<body>
 <h3>Ձախից եզրային արժեքները խոսում են քայլի մասին:</h3>
 <h3>Լցնող հաջորդ արժեքները խոսում են քայլի մասին:</h3>
  <h3>Եթե ունենք սիմետրիիա եզրային արժեքների, ապա հ և վ քայլերը հավասար են:</h3>
  <table border="1" cellspacing="0" cellpadding="10">
   <?php    
    
    for($i = 1; $i <= 10; $i = $i+1){
        echo '<tr>';
        for($j=1; $j <= 10; $j = $j+1){
           echo '<td>'.$j*$i.'</td>';
        }
        echo '</tr>';
    }
    ?>
    </table>
    
    <table border="1" cellspacing="0" cellpadding="3">
    <?php
        for($k = 1; $k <= 10; $k+=3) {
            echo '<tr>';
            for($n = 1; $n <= 10; $n+=3) {
                echo '<td>'.$k*$n.'</td>';
            }
            echo '</tr>';
        }   
        
    ?>        
    </table>
</body>
</html>