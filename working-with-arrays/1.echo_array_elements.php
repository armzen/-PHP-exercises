<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Դուրս բերել զանգ-ի էլեմենտները տողով և ցուցակով:</h1>
	<?php
	
	$color = array('white', 'green', 'red');
	
	echo '<p>'. $color[0] .', ' . $color[1] . ', ' . $color[2] . '</p>';
	
	echo "
	<ul>
		<li>$color[0]</li>
		<li>$color[1]</li>
		<li>$color[2]</li>
	</ul>";
		
	?>
</body>
</html>