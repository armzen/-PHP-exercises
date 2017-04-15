<!DOCTYPE html>
<html>
<head>
<title>HTML5, CSS3 and JavaScript demo</title>
</head>
<body>
<!-- Start your code here -->
 <h3>Таблица умножения.</h3>
  <table cellpadding="5" cellspacing="0" border="1">
  <?php
      
  for($i = 1; $i <= 5; $i++) {
        echo '<tr>';
        for($j = 1; $j <= 6;$j++) {
            echo "<td> $i * $j = ".$i*$j."</td>";
        }
    echo '</tr>';
  }
  echo '</table>';
?>
<!-- End your code here -->
</body>
</html>