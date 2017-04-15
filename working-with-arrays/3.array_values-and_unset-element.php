<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h3> Հեռացնել որևև էլեմենտ զանգ-ից unset()՝ Նախնական թվային նորմալիզացիաից հետո - array_values():</h3>
	<?php
	
	$x = array(2=>1, 3=> 2, 4=> 3,1=> 4,0=> 5);
	$y = array_values($x);
	print_r($x); echo( '<br>');
	print_r($y);
	
	unset($y[3]); echo '<br>';
	print_r($y);
	
	?>
	
</body>
</html>