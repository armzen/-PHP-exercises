<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .b{
            background-color: black;
        }
        .w{
            background-color: white;
        }

    </style>
</head>
<body>
    <table border="1" cellspacing="0"width="360px">
    <?php
    for($j = 1; $j <=9; $j++) {
        echo '<tr>';
        for($i = 1; $i <=9; $i++) {
          if(($i+$j)%2 == 0) {
              echo '<td class="w" width="30px" height="30px">'.$i.'</td>';
          }else{
              echo '<td class="b">'.$i.'</td>';
          }          
        }
        echo '</tr>';
    }
      
    ?>
    </table>
           
</body>
</html>